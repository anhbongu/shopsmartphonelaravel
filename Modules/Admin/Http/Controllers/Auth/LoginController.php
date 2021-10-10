<?php

namespace Modules\Admin\Http\Controllers\Auth;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function getLogin()
    {
        if(session('checkLogin')==true){
            return redirect()->back();
        }
        return view('admin::auth.login');
        
    }

    public function postLogin(Request $request){

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            session()->put('checkLogin', true);
            return redirect()->route('admin');
        } else {
            return redirect()->back();
        }        
    }

    public function logOut(){
        session()->forget('checkLogin');
        Auth::logout();
        return redirect()->route('admin.login');

    }


}
