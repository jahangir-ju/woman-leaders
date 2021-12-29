<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $news_views = news::where('status',1)->latest()->paginate(9);
        return view('frontend/news',compact('news_views'));
    }
    public function newsDetails($id){
        $news_details = news::find($id);
        $relatedNews = news::where('status',1)->latest()->paginate(5);
        return view('frontend/news_view',compact('news_details','relatedNews'));
    }
}
