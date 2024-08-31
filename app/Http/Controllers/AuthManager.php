<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        return view ('login');
    }

    function register () {
        return view ('register');
    }

    function loginPost (Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with("error","Email atau Password salah");
    }

    function registerPost(Request $request){
        $request->validate([
        'username'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required'
        ]);
    
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['xp'] = 0; // Set xp to 0 by default
        $data['created_at'] = now(); // Set created_at to current time
    
        // Directly return the result of User::create()
        return User::create($data)
        ? redirect(route('login'))->with("Sukses", "Registrasi sukses, Login untuk masuk ke aplikasi")
        : redirect(route('register'))->with("error", "Registerasi gagal, coba lagi");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
