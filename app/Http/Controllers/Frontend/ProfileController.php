<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Session;


class ProfileController extends Controller
{
    public function index(){
        return view('frontend.user.profile');
    }
    public function blog(){
        return view('frontend.user.create');
    }
    public function userBlogCreate(Request $request){
        
         $validateData = $request->validate([
            'title_blog'     => 'required',
       
          

        ]);
        if ($request->hasfile('file')) {

            $imageName = $request->file->store('public');
        }

        $data                   = new Blog;
        $data->title            = $request->title_blog;
        $data->category_id      = $request->category_blog;
        $data->author           = Session::get('user_name');
        $data->content          = $request->content;
        $data->status           = 0;
        $data->pictureCaption   = $request->pictureCaption;
        $data->picture          = $imageName;

       $data->save();
        return redirect()->back()->with('status','wait for admin permission');
    }
    }

 