<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //create function
    public function create(){
        return view('users.register');
    }

    //login function
    public function login(){
        return view('users.login');
    }
}

