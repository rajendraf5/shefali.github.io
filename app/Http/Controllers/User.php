<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class User extends Controller
{
    //
    function list()
    {
        return view('users');
    }
    function create()
    {
        return view('create');
    }

    function loginsubmit(Request $req)
    {
        User::all();
        //print_r($req->input());
    }
}
