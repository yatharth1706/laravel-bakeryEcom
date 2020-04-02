<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function submit(Request $request)
    {    
        $request->validate([
            'username'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=> 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'conpassword'=>'required|same:password'
        ],
        [
            'username.required'=>'username is required',
             'password.regex'=> 'Your password must contain 1 uppercase ,1 lowercasse,1 digit,1 special case',
             'conpassword.same'=>'password and confirm password should match'
        ]);
        
        DB::insert('insert into users (username, email,password) values (?, ?, ?)', array($request->input('username'), $request->input('email'),$request->input('password')));
    
        
        return redirect()->back()->with('successSignup', 'You have been successfully signed up');
     

    }
}
