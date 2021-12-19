@extends('index')
@section('content')

    <div class="row pt-4">
      <!------------Blog post Modul start-------------->
      <div class="col-md-12">
        <div class="temp2">
            <h2>Search Result</h2>
        </div>
              @if(!blank($searchBlogs))
             <article class="post vt-post">

                @foreach($searchBlogs as $searchBlog)
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                            @if(!blank($searchBlog->picture))
                              <a href="#"><img src="{{asset(Storage::disk('local')->url($searchBlog->picture))}}" class="img-responsive" alt="image post"></a>
                            @else
                              <a href="#"><img src="{{asset('Frontend/images/default.jpg')}}" class="img-responsive" alt="image post"></a>
                            @endif
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="{{ route('view_blog',$searchBlog->id) }}">{{ $searchBlog->title }}</a></h3>
                              <p>{!!$searchBlog->short_content!!}</p>
                              <a  href="{{ route('view_blog',$searchBlog->id) }}">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                  @endforeach
             
            </article>
            @else
            <article>
              <center><h1>No blog found</h1></center>
            </article>

            @endif


      </div>   
      <!------------Blog post Modul start-------------->
        <div class="clearfix"></div>
    </div>

@endsection()


