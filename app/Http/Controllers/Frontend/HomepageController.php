<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class HomepageController extends Controller
{
    public function index(){
        $blogView = Blog::where('status', '1')->latest()->paginate(2);
        return view('frontend.dashboard',compact('blogView'));
    }
}
