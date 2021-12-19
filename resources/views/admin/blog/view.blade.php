@extends('admin.layout')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/style2.css')}}">
@section('admin_content')

<div class="row">
  <div class="col-12 col-md-8">
    <div class="blog-content">

         @if(!blank($view->picture))
        <img src="{{asset(Storage::disk('local')->url($view->picture))}}" alt="Blog Picture" style="height:30%; width:100%;">
        @else
        <img src="{{ asset('Frontend/images/default.jpg') }}" alt="Blog Picture" style="height:30%; width:100%;">
        @endif
        <h2 class="pt-5">{{$view->title}}</h2>
        <h4><span style="color: red;">{{$view->category->name}}</span></h4>
        <h5> <span style="color: red;">Publication date : {{$view->CustomDate}}</span></h5>

        <p>{!! $view->content !!}</p>
       
    </div>
  </div>

</div>
@endsection