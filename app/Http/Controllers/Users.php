<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('users.dashboard');
    }
}
