@extends('admin.layout')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/style2.css')}}">

@section('admin_content')

<div class="row">
  <div class="col-12 col-md-8">
    <div class="blog-content">

        <img src="{{asset(Storage::disk('local')->url($view->file))}}" alt="Notebook" style="height:25%; width:100%;">
        <h2>{{$view->title}}</h2>
        <h4>{{$view->created_at}}</h4>
        <h4>{{$view->category}}</h4>

        <p>{{ $view->content }}</p>
    </div>
  </div>

</div>
@endsection