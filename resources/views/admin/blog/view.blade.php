@extends('admin.layout')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/style2.css')}}">
@section('admin_content')

<div class="row">
  <div class="col-12 col-md-8">
    <div class="blog-content">

        <img src="{{asset(Storage::disk('local')->url($view->picture))}}" alt="Notebook" style="height:30%; width:100%;">
        <h2>{{$view->title}}</h2>
        <h4>{{$view->category_id}}</h4>
        <h5>Publication date : {{$view->created_at}}</h5>

        <p>{{$view->content}}</p>
       
    </div>
  </div>

</div>
@endsection