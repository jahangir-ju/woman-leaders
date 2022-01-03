@extends('index')
@section('content')

    <div class="row pt-4">
      <!------------Blog post Modul start-------------->
      <div class="col-md-12">
        <div class="temp2">
            <h2>{{ $category->name }}</h2>
        </div>
            
             <article class="post vt-post">
                @foreach($show_by_categories as $show_by_category)
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                            @if(!blank($show_by_category->picture))
                              <a href="#"><img src="{{asset('image/'.$show_by_category->picture)}}" class="img-responsive" alt="image post"></a>
                            @else
                              <a href="#"><img src="{{asset('frontend/images/default.jpg')}}" class="img-responsive" alt="image post"></a>
                            @endif
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="{{ route('view_blog',$show_by_category->id) }}">{{ $show_by_category->title }}</a></h3>
                              <p>{!!$show_by_category->short_content!!}</p>
                              <a  href="{{ route('view_blog',$show_by_category->id) }}">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                  @endforeach
             
            </article>
      </div>   
      <!------------Blog post Modul start-------------->
        <div class="clearfix"></div>
    </div>

  @endsection()
