@extends('index')
@section('content')


    <div class="row pt-4">
      <!------------Blog post Modul start-------------->
      <div class="col-md-8">

        <h4>Recent blog</h>
            
           <article class="post vt-post">
              @foreach($blogView as $v_blogView)
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                            @if(!blank($v_blogView->picture))
                              <a href="#"><img src="{{asset(Storage::disk('local')->url($v_blogView->picture))}}" class="img-responsive" alt="image post"></a>
                              @else
                               <a href="#"><img src="{{asset('Frontend/images/default.jpg')}}" class="img-responsive" alt="image post"></a>
                               @endif
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="{{ route('view_blog',$v_blogView->id) }}">{{ $v_blogView->title }}</a></h3>
                              <p>{!! $v_blogView->short_content !!} </p>
                              <a class="btn btn-default" href="{{ route('view_blog',$v_blogView->id) }}" role="button">Read More</a> </div>
                      </div>
                    </div>
                  <hr>
                  @endforeach                  
            </article>
 
      </div>  

      <!------------Blog post Modul start-------------->
      <!---------Left Module start------>
      <div class="col-md-4">
        @include('frontend.helper.rightslide');

      </div><!---------Left Module start------>

        <div class="clearfix"></div>
    </div>
      {{ $blogView->links() }}

  @endsection()
