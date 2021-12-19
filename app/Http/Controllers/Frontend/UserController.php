<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserVerify;
use Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('frontend.user.login');
    }

    public function register() {
        return view('frontend.user.register');
    }

    public function create( Request $request){
        
        $request->validate([
            'name'      => 'required',
            'password'  => 'required|min:8',
            'email'     => 'required',
            'gender'    => 'required',
            'phone'     => 'required',
        ]);
        
        $user                = new User;
        $user->name        = $request->name;
        $user->password    = $request->password;
        $user->gender      = $request->gender;
        $user->email       = $request->email;
        $user->phone       = $request->phone;
        $user->save();

        Mail::to($user)->send(new UserVerify($user));

        return redirect()->back()->with('status','Plese check mail for verify your account');

    }
    public function loign(Request $request){

        $this->validate($request, [
            'user_email'    => 'required|email',
            'user_password' => 'required|min:8',
        ]);

        $email    = $request->user_email;
        $password = $request->user_password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            Session::put('name',auth()->user()->name);
            Session::put('id', auth()->id());
            return redirect(route('home'));
        } else {

            Session::flash('message', 'Email or Password Invalid');

            return Redirect()->back();

        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('userLogin');
    }
}
