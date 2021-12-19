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
    public function AwarnessRaising(){
        return view('frontend.activities.AwarnessRaising');
    }
    public function WomenEmpowerment(){
        return view('frontend.activities.WomenEmpowerment');
    }

}
