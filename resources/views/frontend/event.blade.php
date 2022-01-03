@extends('index')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/event.css')}}">
@section('content')
<section id="project" class="p-5">
    <div class="container">
      <div class="event">
        <h4>Event</h4>
        <p>BlogHer was founded on the premise that women’s collective voices hold boundless power. Today, BlogHer is a content and community platform built to inspire and educate millions of enterprising women.On International Women’s Day, BlogHer used its platform to celebrate women’s achievements and raise awareness about women’s equality featuring inspirational and educational workshops and conversations from our dedicated female community members, activists, and celebrity influencers.</p>
      </div>
            <h4>Upcoming Event</h4>
      <div class="row">

        @foreach($events as $event)
          <div class="row-sm-6 col-md-4 my-3">

            @if(blank($event->eventImage))
            <img src="{{asset('image/'.$event->eventImage)}}" class="img-fluid rounded" alt="picture">
          @else
            <img src="{{asset('frontend/images/default.jpg')}}" class="img-fluid rounded" alt="picture">
          @endif


            <p class="my-3" >
              <div class="row">
                <div class="Eventdate col-md-2">
                     {{$event->CustomDate}}                 
                </div>
                <div class="col-md-10">
                  <a href="{{route('event.description',$event->id)}}"> {{$event->eventName}} </a>
                  
                </div>
              </div>                

            </p>

              <div class="urlbutton">
                <a href="{{route('event.register', $event->id)}}"> Register </a>
              </div>
          </div>
        @endforeach
         
       
        
      </div>
      
    </div>
   </section>
   


@endsection