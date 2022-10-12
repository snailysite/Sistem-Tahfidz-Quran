<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    public function postlogin(Request $request){
        if (Auth::attempt($request->only('name','password'))){
            return redirect('dashboard');
        }
        return redirect('login');
    }

    public function register(){
        return view('register');
    }

    public function postregister(Request $request){
        //
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token'=>Str::random(69)
        ]);
        return redirect('login');
    }
}
