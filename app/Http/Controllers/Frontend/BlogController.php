<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class BlogController extends Controller

{
    public function index(){
        $categories = Category::get()->each(function($feed) {
            $feed->load('blogs');
        });
        return view("frontend/blog",compact('categories'));
    }
    public function blog_by_category($id){
        $show_by_categories = blog::where('category_id', $id)->latest()->get();
        return view("frontend/blog_by_category",compact('show_by_categories'));
    }
    public function view_blog($id){
        $blog_details = blog::find($id);
        return view('frontend/blog_view',compact('blog_details'));
    }
}
