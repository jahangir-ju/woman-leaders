<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\EventRegister;
class EventController extends Controller
{
    public function event(){
        $events = event::where('status',1)->latest()->get();
        return view('frontend/event',compact('events'));
    }

     public function description($id){
        $eventdescription = event::find($id);
        return view('frontend/eventDescription',compact('eventdescription'));
    }

    public function register($id){
        $registerstore = event::find($id);
        return view('frontend/eventRegister', compact('registerstore'));
    }

   public function register_store(Request $request, $id){
       
         $validateData = $request->validate([
            'firstname'     => 'required',
            'lastname'      => 'required',
            'email'         => 'required',
            'phone'         => 'required|numeric|min:11|max:11',
            'address'       => 'required',
            'status'        => 'required',
            'occupation'    => 'required',
        ]);
   

        $data               = new eventRegister;
        $data->eventId      = $request->id;
        $data->firstname    = $request->firstname;
        $data->lastname     = $request->lastname;
        $data->email        = $request->email;
        $data->phone        = $request->phone;
        $data->address      = $request->address;
        $data->occupation   = $request->occupation;
        $data->status       = $request->status;
   
       $data->save();
        return redirect()->back()->with('status','Register Successful');
    }
     
}

