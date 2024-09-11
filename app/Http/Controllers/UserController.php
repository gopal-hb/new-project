<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('admin.assets.login');
    }

    public function loginop(Request $request){
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (auth()->attempt($credentials)) {
                return redirect()->intended('dashboard');
            }

            return redirect("login")->with('Success','Login details are not valid');
    }

    public function logout(){
        auth()->logout();
        return redirect("login");
    }

    public function dashboard(){

        return view('admin.assets.dashboard');

    }
}
