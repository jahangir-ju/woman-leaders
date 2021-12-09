@extends('index')
@section('content')
<section id="project" class="p-5">
    <div class="container">
      <div class="row">

     @foreach($news_views as $news_view)
        <div class="row-sm-6 col-md-4 my-3">
          <img src="{{asset(Storage::disk('local')->url($news_view->file))}}" class="img-fluid rounded" alt="picture">
          <h5 class="my-3"><a href="{{ route('newsDetails',$news_view->id) }}" >{{$news_view->title}}</a></h5>
          <p class="text-muted">{{$news_view->created_at}}</p>
        </div>
      @endforeach
       
        
      </div>
      
    </div>
   </section>
   


@endsection