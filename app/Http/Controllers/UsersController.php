<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('user.create', compact('users'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
         'name' => 'required | string',
         'username' => 'required| string',
         'email' => 'required | string | email | unique:users',
         'password' => 'required | string | confirmed',
         'role' => 'required',
         'avatar' => 'required',
     ]);

         $user = new User;
         $user->name = $request["name"];
         $user->username = $request["username"];
         $user->email = $request["email"];
         $user->password = Hash::make($request["password"]);
         $user->role = $request["role"];
         $user->email_verified_at= now();
         $profilePicture = $request->file('avatar')->store('avatar');
         $user->avatar = $profilePicture;

         $user->save();
         return redirect('/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::find($id);
        return view ('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
           'name' => 'string',
           'username' => 'string',
           'email' => 'string | email',
           'password' => 'string |min:8| confirmed',
       ]);


       //dd($user);


           $user->name = $request['name']!== null ? $request['name'] : $user['name'];
           $user->username = $request['username']!== null ? $request['username'] : $user['username'];
           $user->email = $request['email']!== null ? $request['email'] : $user['email'];
           $user->password = $request['password']!== null ? Hash::make($request["password"]) : $user['password'];
           $user->role = $request["role"];
           $user->email_verified_at= now();
           $user->save();
           return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
