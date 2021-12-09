<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class DashboardController extends Controller
{
    public function index(){
        return view('admin/login');
    }


    public function login(Request $request){

    
            $email =  $request->admin_email;
            $password = $request->password;

            $result = DB::table('admins')
            ->where('email', $email)
            ->where('password',$password)
            ->first(); 

            if($result){
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            //return Redirect::to('/dashboard');
            return 'login';
        }
        else{
            Session::put('message','Email or Password Invalid');
            return 'Not login';
            //return Redirect::to('/admin');
        } 
       
    }
    public function dashboard(){
        return view('admin/dashboard');
    }
}
