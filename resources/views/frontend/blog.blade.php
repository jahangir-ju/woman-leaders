@extends('index')
@section('content')

    <div class="row pt-4">
      <!------------Blog post Modul start-------------->
      <div class="col-md-8">

            <h2>Blog Articles By Topic</h2>

            @if(!blank($categories))
                @foreach($categories as $category)
                    <article class="post vt-post">
                      <div class="temp1">
                      <h3>{{  $category->name }}</h3></div>

                      @foreach($category->blogs as $blog)

                              <div class="row">
                                  <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                                      <div class="post-type post-img">
                                       @if(!blank($blog->picture))
                                          <a class="pt-4" href=""><img src="{{asset('image/'.$blog->picture)}}" class="img-responsive" alt="image blog"></a>
                                        @else
                                        <a class="mt-4" href=""><img src="{{asset('frontend/images/default.jpg')}}" class="img-responsive" alt="image blog"></a>
                                        @endif
                                      </div>
                                  
                                  </div>
                                  <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                                      <div class="caption">
                                          <h3 class="md-heading"><a href="{{route('view_blog',$blog->id)}}">{{$blog->title}}</a></h3>
                                          <p>{!!$blog->short_content!!}</p>
                                          <a  href="{{route('view_blog',$blog->id)}}">Read More</a> </div>
                                  </div>
                              </div>
                              <hr>
                          @endforeach
                    </article>
                @endforeach
            @endif

         </div>

      <!------------Blog post Modul start-------------->
      <!---------Left Module start------>
      <div class="col-md-4">

        @include('frontend.helper.rightslide');

      </div><!---------Left Module start------>

        <div class="clearfix"></div>
    </div>

  

  @endsection()
