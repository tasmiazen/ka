<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
//use App\User;
use App\User;
use Hash;
use App\Http\Controllers\Controller;
use Auth;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $model =User::whereNotIn('id', [ Auth::guard('admin')->user()->id ])->simplePaginate(25);


        return view('backend.users.index', [ 'data' => $model ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
           'name' => 'required|max:200',
           'email' => 'required|unique:users|max:200',
           'address' => 'required',
           'password' => 'required|max:200',
       ]);

       if (!$validatedData) return back()
           ->withErrors($validatedData)
           ->withInput();

        $user = new User([
            'name' => $request['name'],
            'email' => $request['email'],
            'address' => $request['address'],
            'password' => bcrypt($request['address']),
        ]);
        $user->save();
       return redirect()->route('users.index')->with('success','User successfully  created');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('backend.users.edit', [ 'data' =>  \App\User::where('id', $id )->first() ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        //
        $validatedData = $request->validate([
          'name' => 'max:200',
          'email' => 'max:200',
          'password' => 'max:200',
          'address' => 'max:400',
        ]);

        if (!$validatedData) return redirect()
           ->route('users.index')
           ->withErrors($validatedData)
           ->withInput();

              //
        User::where('id', $id)
        ->update([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'address' => $request->input('address'),
          'password' => Hash::make( $request['password'] ),
        ]);
        return redirect()->route('users.index')->with('success','User update Complete!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id )->first(); 
        if($user != null ){
            $user->delete();
        }
        return back()->with('success', 'User Deleted');
    }

}
