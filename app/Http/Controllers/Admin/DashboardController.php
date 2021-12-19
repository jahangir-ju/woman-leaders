<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Admin;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $email = $request->admin_email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Session::put('name',auth()->user()->name);
            Session::put('id', auth()->id());
            return view('admin.layout');
        } else {
            Session::put('message','Email or Password Invalid');
            return Redirect()->back();
        }        
    }

    public function logout(Request $request){
        
        Auth::logout();

        return redirect()->route('login');
    }
}
