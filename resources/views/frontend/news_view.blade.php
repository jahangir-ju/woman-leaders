@extends('index')
@section('content')

  <div class="row">
        <div class="col-12 col-md-8">
          <div class="blog-content">

          	<h2 class="pt-3">{{ $news_details->title }}</h2>
          	<p>Publication date :: {{ $news_details->CustomDate }}</p>
               <figure>
                  @if(!blank($news_details->file))
                      <img class="pt-4" src="{{asset(Storage::disk('local')->url($news_details->file))}}" class="img-responsive" alt="image post" style="width: 100%; height: 450px;">

                        <figcaption>{{ $news_details->pictureCaption }}</figcaption>
                    @else
                    <img class="pt-4" src="{{asset('Frontend/images/default.jpg')}}" class="img-responsive" alt="image post" style="width: 100%; height: 450px;">
                    @endif
                  </figure>
              

              <p class="pt-5">{!!$news_details->content !!}</p>
          </div>
        </div>


    <div class="col-6 col-md-4">
        <div class="right_header">
          <p class="pt-5">Related News</p>
        </div>
         @foreach($relatedNews as $v_relatedNews)
            <div class="right-content">
                 
                      <div class="row">
                        <div class="col-6 col-md-8">
                          <h5><a href="{{ route('newsDetails',$v_relatedNews->id) }}" >{{ $v_relatedNews->title }}</a></h5>
                        </div>
                        <div class="col-6 col-md-4">
                          @if(!blank($news_details->file))
                           <img src="{{asset(Storage::disk('local')->url($news_details->file))}}" alt="Notebook" style="height: 80%; width:100%">
                           @else
                            <img src="{{asset('Frontend/images/default.jpg')}}" alt="Notebook" style="height: 80%; width:100%">
                            @endif
                        </div>
                      </div>
                <hr>              
            </div>
          @endforeach
      </div>
 
</div>

@endsection()
