<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Blog;

class BlogController extends Controller

{
    public function index(){
        $categories = Category::get()->each(function($feed) {
            $feed->load('blogs');
        });
        return view("frontend.blog",compact('categories'));
    }

    public function blog_by_category($id){
        $show_by_categories = Blog::where('category_id', $id)->where('status', '1')->latest()->get();
        $category = Category::find($id);
        return view("frontend.blog_by_category",compact('show_by_categories', "category"));
    }
    
    public function view_blog($id){
        $blogDetails = Blog::find($id);
        $relatedblog =Blog::paginate(5);
        return view('frontend/blog_view',compact('blogDetails','relatedblog'));
    }
    public function search(Request $search){
        return "fsdlf";
    }
}
