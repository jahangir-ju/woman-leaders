<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function peacePromoting(){
        return view('frontend.activities.peacePromoting');
    }
    public function skillLeadership(){
        return view('frontend.activities.skillLeadership');
    }
    public function publications(){
        return view('frontend.activities.publications');
    }
    public function awarnessRaising(){
        return view('frontend.activities.awarnessRaising');
    }
    public function womenEmpowerment(){
        return view('frontend.activities.womenEmpowerment');
    }

}
