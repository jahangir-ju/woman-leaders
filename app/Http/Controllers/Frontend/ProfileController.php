<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Session;


class ProfileController extends Controller
{
    public function index(){
        $id          = session('user_id');
        //$profileinfo = Users::where('id', $id)->first();
        $userBlogs   = Blog::where('id', $id)->get();
        return view('frontend.user.profile',compact('userBlogs'));
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

        //dd($data);
        $data->save();
        return redirect()->back();
    }
    public function details($id){
        $userBlogDetails = Blog::find($id);
        return view('frontend.user.details_blog',compact('userBlogDetails'));
    }

}

 