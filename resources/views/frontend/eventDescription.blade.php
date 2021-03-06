@extends('index')
<link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/event.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
  <section id="project" class="p-5">
        <div class="row">

          <div class="row-sm-6 col-md-6">
            <img src="{{asset(Storage::disk('local')->url($eventdescription->eventImage))}}" class="img-fluid rounded" style="height:60%; width:80%" alt="picture">
            
          </div>

          <div class="row-sm-6 col-md-6">
            <p>{{$eventdescription->eventName}}</p>
               <ul>
                 <li><span style="font-size: 20px; color:red;">Date : {{$eventdescription->DateFormat}}</span> </li>
                 <li><span style="font-size: 20px; color:red;">Time : {{$eventdescription->TimeFormat}}</span> </li>
                 <li><span style="font-size: 20px; color:red;">Locaion : {{$eventdescription->location}}</span> </li>
               
                 
               </ul>
              
          </div>
        </div>

        <hr style="height:2px;border-width:0;color:gray;background-color:#1cb588">

        <div class="description">
          <p>{!!$eventdescription->description!!}</p>

            <center><button><a href="{{route('event.register', $eventdescription->id)}}">Register Now</a></button></center>
        </div>

         <hr style="height:2px;border-width:0;color:gray;background-color:#1cb588">


         <div class="speaker">
           <h2>Meet The Speaker</h2>
           <p>Take a look at our speaker scheduled for this event.</p>
                <div class="card">

                  @if(!blank($eventdescription->speakerImage))
                    <img src="{{asset(Storage::disk('local')->url($eventdescription->speakerImage))}}" alt="John" style="width:100%">
                  @else
                      <img src="{{asset('Frontend/images/avator.png')}}" alt="John" style="width:100%">
                  @endif

                  <h1>{{$eventdescription->speaker}}</h1>
                  <p>{{$eventdescription->speakerDesignation  }}</p>
                  <p>{{$eventdescription->speakerInstitute}}</p>

                    <div style="margin: 24px 0;">
                      <a href="#"><i class="fa fa-twitter"></i></a>  
                      <a href="#"><i class="fa fa-linkedin"></i></a>  
                      <a href="#"><i class="fa fa-facebook"></i></a> 
                    </div>
                </div>
         </div>
         
    
  </section>
   


@endsection