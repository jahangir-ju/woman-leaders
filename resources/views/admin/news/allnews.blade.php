@extends('admin.layout')
@section('admin_content')
 
<h1 class="page-title">News <a href="{{route('news.manage')}}"> <button class="btn btn-primary btn-sm">Manage News</button> </a></h1>
  <div class="row">
    @foreach($news1 as $news)
      <div class="col-6 col-md-4">
          <div class="card">
             @if(!blank($news->file))

        <img class="card-img-top"src="{{asset('image/'.$news->file)}}" alt="news image" style="height:300px;">
        @else
        <img class="card-img-top" src="{{asset('frontend/images/default.jpg')}}" alt="news image" style="height:300px;">
        @endif

           
            <div class="card-body">
              <h2 class="card-title"><a href="{{ route('news.view',$news->id) }}">{{$news->title}}</a></h2>
              <h5 class="card-title">{{$news->CustomDate}}</h5>
            </div>
          </div>
      </div>
    @endforeach
  </div>
  {{$news1->links()}}

        
@endsection