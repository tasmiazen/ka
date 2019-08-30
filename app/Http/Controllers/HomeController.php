<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Client;




class HomeController extends Controller
{
    //
    public function index()
    {
      // code...
      return view('frontend.home');
    }

    public function ticketStore(Request $request)
    {

      $validatedData = $request->validate([
         'department_id' => 'required',
         'subject' => 'required|string',
         'message' => 'required|string',
         'priority' => 'required|string',
         'email'  =>'email|required',
     ]);

     $client_id = Client::select('id')->where( 'email', $request->email )->first();


     if (!$validatedData) return redirect()
         ->route('client.home')
         ->withErrors($validatedData)
         ->withInput();

         $ticket= new Ticket();
         $ticket->uuid = uniqid();
         $ticket->client_id = $client_id;
         $ticket->department_id= $request['department_id'];
         $ticket->subject= $request['subject'];
         $ticket->message= $request['message'];
         $ticket->priority= $request['priority'];
         $ticket->save();

     return redirect()
         ->route('client.home')->with('success','ticket created successfully!');


    }


}
