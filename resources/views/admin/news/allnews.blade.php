@extends('admin.layout')
@section('admin_content')
 
<h1 class="page-title">News <a href="{{route('news.manage')}}"> <button class="btn btn-primary btn-sm">Manage News</button> </a></h1>
  <div class="row">
    @foreach($news1 as $news)
      <div class="col-6 col-md-4">
          <div class="card">

            <img class="card-img-top" src="{{asset(Storage::disk('local')->url($news->file))}}" alt="Card image cap" style="height:300px;">
            <div class="card-body">
              <h2 class="card-title"><a href="">{{$news->title}}</a></h2>
              <h5 class="card-title">{{$news->created_at}}</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis quam, sequi dolorum excepturi repudiandae atque dignissimos voluptatum aperiam!</p>
            </div>
          </div>
      </div>
    @endforeach
  </div>
  {{$news1->links()}}

        
@endsection