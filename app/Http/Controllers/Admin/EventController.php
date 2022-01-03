<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\EventRegister;
class EventController extends Controller
{
    public function index(){
        $events = event::paginate(10);
        return view("admin.event.view",compact('events'));
    }
    public function create(){
        return view('admin.event.create');
    }
         public function save(Request $request){


         $validateData  = $request->validate([
            'eventName'           => 'required',
            'date'                => 'required',
            'time'                => 'required',
            'location'            => 'required',
            'speaker'             => 'required',
            'speakerDesignation'  => 'required',
            'speakerImage'        => 'required',
            'speakerInstitute'    => 'required',
            'description'         => 'required',
            'status'              => 'required',
          

        ]);

        $eventImage = "";
        if ($request->hasfile('eventImage')) {

             $eventImage = time().'.'.$request->eventImage->extension();
            $request->eventImage->move(public_path('image'),$eventImage);
           
        }
         $speakerImage = "";
        if ($request->hasfile('speakerImage')) {
              $speakerImage = time().'.'.$request->speakerImage->extension();
            $request->speakerImage->move(public_path('image'),$speakerImage);
          
        }

        $data                       = new event;
        $data->eventName                 = $request->eventName;
        $data->date                 = $request->date;
        $data->time                 = date('H:i:s', strtotime($request->time));
        $data->location             = $request->location;
        $data->speaker              = $request->speaker;
        $data->speakerDesignation   = $request->speakerDesignation;
        $data->speakerInstitute     = $request->speakerInstitute;
        $data->speakerImage         = $speakerImage;
        $data->description          = $request->description;
        $data->status               = $request->status;
        $data->eventImage           = $eventImage;
   
        // dd($data);
  
       $data->save();
       return redirect()->back()->with('status','event added');
    }
        public function unactive($id)
    {
        
        event::where('id', $id)
            ->update(['status' => 0]);

        return redirect()->back();
    }
    public function active($id)
    {
        
         event::where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();

    }
      public function destroy(Request $request, $id)

    {
        $request = event::find($id);
        $request->delete();
        return redirect()->back();
     
    }
      public function view($id)
    {
        //return "view";
        $eventDetails = event::find($id);
        return view('admin.event.eventdetails', compact('eventDetails'));
    }
       public function edit($id)
    {
         
        $eventEdit = event::where('id', $id)->first();
         return view('admin.event.update', compact('eventEdit'));
    }
        public function update(Request $request, $id)
    {
      return $id;
    }



    public function registerall(){
        $registerpeoples = eventRegister::all();
        return view('admin.event.register',compact('registerpeoples'));
    }
}

