<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Usercontroller extends Controller
{
    //

    public function index()
    {
        $user = User::All();
         return view('Admin_dash.users.user',['user'=>$user]);
    }
    // public function show($id)
    // {
    //     return
    // }
    public function create()
    {
        return view('Admin_dash.users.createuser');

    }
    public function store(Request $request)
    {
        $users=$request->validate([

            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'roles_id'=>'required|numeric',

        ]);

        $newuser=User::create($users);
        return redirect()->route('users');

    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
        // Logic to fetch data and return a view
    }
    public function destroy($id)
    {
        // Delete the resource and redirect
    }
}
