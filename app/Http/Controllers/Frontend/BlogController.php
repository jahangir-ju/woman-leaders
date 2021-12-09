<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;

class BlogController extends Controller

{
    public function index(){
        $blogs_view = blog::paginate(2);
        return view("frontend/blog",compact('blogs_view'));
    }
    public function blog_by_category(){
        return view("frontend/blog_by_category");
    }
    public function view_blog(){
        return view('frontend/blog_view');
    }
}
