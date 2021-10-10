<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginController extends MainController
{
    public function getlogin(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $result = DB::table('users')->where('email', $request->email)->first(); 
            session()->put('name', $result->name);
           

            return redirect()->route('home');
        }  
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng',
        ]);      
    }

    public function logOut(){
        Auth::logout();
        return redirect()->route('login');
    }
}
