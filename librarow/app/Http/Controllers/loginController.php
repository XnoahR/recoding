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
            if(Auth::User()->role_id == 1){
                return redirect()->intended('admin')->with('Success','Login success');
            }
            else if(Auth::User()->role_id == 2){
                return redirect()->intended('home')->with('Success','login user success');
            }
        }else {
            return back()->with('Error','Login failed, please check your email and password again.');
        }
    }

    public function store(Request $request){
        $credential = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required',
        ]);

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->role_id = 2;
        $users->save();
        //if fail
        if(!Auth::attempt($credential)){
            return back()->with('Error','Register failed, please check your email and password again.');
        }
        //if success
        return redirect()->intended('login')->with('Success','Register success');
    }
}
