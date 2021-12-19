<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Admin;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.login');
    }


    public function login(Request $request){

    
            $email =  $request->admin_email;
            $password = $request->password;

            $result = Admin::where('email', $email)
            ->where('password',$password)
            ->first(); 

            if($result){
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            return view('admin.layout');
           
        }
        else{
            Session::put('message','Email or Password Invalid');
            //return 'Not login';
            return Redirect()->back();
        } 
       
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }

}
