<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\address;
use App\Models\category;
use App\Models\event;
use App\Models\location;
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

        $Location= location::where('is_deleted',0)->count();
        $Category= category::where('is_deleted',0)->count();
        $Address= address::where('is_deleted',0)->count();
        $Events= event::where('is_deleted',0)->count();
        return view('admin.assets.dashboard',compact('Location','Category','Address','Events'));

    }
}
