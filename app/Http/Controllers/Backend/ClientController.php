<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Client;
use Illuminate\Http\Request;

use Becore\Becore\TableBuilder\Builder;
use Illuminate\Support\Facades\View;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $model = Client::simplePaginate(25);

        return view('backend.client.index', ['data' =>  $model ]);
    }

    /**Setting
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validateLogin($request);

      $client_uuid = \uniqid();

      $client = new Client([
      'name' => $request['name'],
      'email' => $request['email'],
      'address' => $request['address']
      ]);
      $client['password'] = \bcrypt( uniqid() );
    
      $client->save();

     // Notifications

      
    $client  = Client::where('email', $request['email'] )->first();
      
      if( $request['login_link'] ) {

        $token = \uniqid().\uniqid().\uniqid();
        LoginByEmail::insert([
          'client_id' =>   $client->id,
          'token' => $token,
        ]);

      } 
      
      return redirect()->route('clients.index')->with('success','enrole client successfull!');

    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    private function validateLogin(Request $request)
    {
      // other
      $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'password' => 'required',
            
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        //
        return view('backend.client.edit',['client' => Client::where('uuid', $uuid )->first() ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        //
        $this->validateLogin($request);

        Client::where('uuid', $uuid )->update([
          'name' => $request['name'],
          'email' => $request['email'],
          'phone' => $request['phone'],
          'gender' => $request['gender'],
          'address' => $request['address'],
        ]);

        return redirect()
            ->route('clients.index')->with('success','client Information update  Complete!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::where('id', $id )->first();
        if(  $client != null ) {
          $client->delete();
        }
        return back()->with('success', 'Client Deleted');
    }




}
