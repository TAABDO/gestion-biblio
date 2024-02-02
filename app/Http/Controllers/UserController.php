<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //

    public function user(){
        return view('Dashboard.dashboard');
    }
    public function index()
    {
        // Logic to fetch data and return a view
    }
    public function show($id)
    {
        // Logic to fetch data and return a view
    }public function create()
    {
        // Logic to fetch data and return a view
    }public function store(Request $request)
    {
        // Logic to fetch data and return a view
    }public function edit($id)
    {
        // Logic to fetch data and return a view
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
