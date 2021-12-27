@extends('index')
@section('content')
<section id="project" class="p-5">
    <div class="container">
      <h3 style="text-align: center; text-decoration: underline; color: limegreen;">All News</h3>
      <div class="row">

     @foreach($news_views as $news_view)
        <div class="row-sm-6 col-md-4 my-3">

          @if(!blank($news_view->file))
            <img src="{{asset(Storage::disk('local')->url($news_view->file))}}" class="img-fluid rounded" alt="picture">
          @else
            <img src="{{asset('Frontend/images/default.jpg')}}" class="img-fluid rounded" alt="picture">
          @endif

          <h5 class="my-3"><a href="{{ route('newsDetails',$news_view->id) }}" >{{$news_view->title}}</a></h5>
          <p class="text-muted">{{$news_view->CustomDate}}</p>
        </div>
      @endforeach
       
        
      </div>
      
    </div>
   </section>
   


@endsection