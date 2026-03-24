<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        User::create([
            'name'=> $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login.form')->with('success','Registration succesful!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credential = $request->only('email', 'password');

    //     if(Auth::attempt($credential)) {
    //         return redirect()->route('dashboard')->with('success', 'Login succesfully');
    //     }

    //     return back()->with('error', 'Invalid credential');
    // }
    

    public function login(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credential = $request->only('email','password');

        if(Auth::attempt($credential)){
            return redirect()->route('dashboard')->with('succes', 'Login Succesfully');
        }

        return back()->with('error','Invalid credential');
    }
}
