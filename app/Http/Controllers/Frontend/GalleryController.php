<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function photo(){
        return view("frontend/photo");
    }
    
    public function video(){
        return view("frontend/video");
    }
}
