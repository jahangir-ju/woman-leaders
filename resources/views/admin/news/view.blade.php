@extends('admin.layout')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/style2.css')}}">

@section('admin_content')

<div class="row">
  <div class="col-12 col-md-8">
    <div class="blog-content">

        @if(!blank($view->file))

          <img src="{{asset(Storage::disk('local')->url($view->file))}}" alt="Notebook" style="height:25%; width:100%;">
        @else
          <img src="{{asset('Frontend/images/default.jpg')}}" alt="Notebook" style="height:25%; width:100%;">
        @endif

          <h3 class="pt-5">{{$view->title}}</h3>
          <h4 ><span style="color:red">{{$view->CustomDate}}</span></h4>
          <h4><span style="color:red">{{$view->category->name}}</span></h4>
          <p>{!! $view->content !!}</p>


    </div>
  </div>

</div>
@endsection