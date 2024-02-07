<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        Session::flash('email', $request->email);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required',
        ]);

        if (Auth::attempt($credentials)) {
            //if user
            $request->session()->regenerate();
            if (Auth::User()->role_id == 1) {
                return redirect()->intended('admin')->with('Success', 'Login success');
            } else if (Auth::User()->role_id == 2) {
                return redirect()->intended('home')->with('Success', 'login user success');
            }
        } else {
            return redirect('login')->withErrors('Login failed, please check your email and password again.');
        }
    }

    public function store(Request $request)
    {
        Session::flash('email', $request->email,);   
        Session::flash('name', $request->name);
        $credential = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 6 characters', 
        ]);

        $users = new User;
        $users->name = $credential['name'];
        $users->email = $credential['email'];
        $users->password = bcrypt($credential['password']);
        $users->role_id = 2;
        $users->save();

        if (Auth::attempt($credential)) {
            return redirect()->intended('login')->with('Success', 'Register success');
        } else {
            return redirect()->intended('login')->withErrors('Register failed, please check your email and password again.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('Success', 'Logout success');
    }
}
