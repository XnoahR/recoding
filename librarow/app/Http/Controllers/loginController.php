<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        dd($credentials);
        
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'name' => ['required', 'max:60'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:1', 'max:20'],
        ]);
        
        dd($credentials);
    }
}
