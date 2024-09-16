<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //create function
    public function create(){
        return view('users.register');
    }


    //create new users
    public function store(Request $request){
      $formFields = $request->validate([
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', Rule::unique('users','email')],
        'password' => ['required','confirmed', 'min:6'] 
      ]);
        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create a new user
        $user = User::create($formFields);

        //login the user
        Auth::login($user);

        //redirect to the home page
        return redirect('/')->with('message', 'Account created successfully');
    }
    //login function
    public function login(){

        return view('users.login');
    }
}

