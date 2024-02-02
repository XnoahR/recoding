<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index()
    {
        return view('login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        Session::flash('email', $request->email);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required',
        ]);
        
        if(Auth::attempt($credentials)){
            //if user
            
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('loginSuccess','Login success');
        }else {
            return back()->with('loginError','Login failed, please check your email and password again.');
        }
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
