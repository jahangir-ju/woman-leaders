@extends('index')
@section('content')

<div class="row">
  <div class="col-12 col-md-8">
    <div class="blog-content">
            <figure>
              @if(!blank($blogDetails->picture))
                <img class="pt-4" src="{{asset(Storage::disk('local')->url($blogDetails->picture))}}" class="img-responsive" alt="image post" style="width: 100%; height: 60%;">
                <figcaption>{{ $blogDetails->pictureCaption }}</figcaption>
                @else
                <img class="pt-4" src="{{asset('Frontend/images/default.jpg')}}" class="img-responsive" alt="image post" style="width: 100%; height: 60%;">

                @endif

                  
            </figure>
        
        <h2>{{ $blogDetails->title }}</h2>
        <p>{!! $blogDetails->content !!}</p>




        <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://http-localhost-women-leaders-public.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
  </div>

 

      <div class="col-6 col-md-4">
        <div class="right_header">
          <p class="pt-5">Similar  Blog</p>
        </div>
         @foreach($relatedblog as $v_relateblog)
            <div class="right-content">
                 
                      <div class="row">
                        <div class="col-6 col-md-8">
                          <h5><a href="{{ route('view_blog', $v_relateblog->id) }}" >{{ $v_relateblog->title }}</a></h5>
                        </div>
                        <div class="col-6 col-md-4">
                          
                          @if(!blank($v_relateblog->picture))
                          <img class="pt-4" src="{{asset(Storage::disk('local')->url($v_relateblog->picture))}}" class="img-responsive" alt="image post" style="height: 80%; width:100%">
                            
                              @else
                              <img class="pt-4" src="{{asset('Frontend/images/default.jpg')}}" class="img-responsive" alt="image post" style="height: 80%; width:100%">

                              @endif

                        </div>
                      </div>
                <hr>              
            </div>
          @endforeach
      </div>


</div>

@endsection()
