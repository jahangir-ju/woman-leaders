@extends('index')
@section('content')

<div class="row">
  <div class="col-12 col-md-8">
    <div class="blog-content">
            <figure>
              @if(!blank($userBlogDetails->picture))
                <img class="pt-4" src="{{asset('image/'.$userBlogDetails->picture)}}" class="img-responsive" alt="image post" style="width: 100%; height: 60%;">
                <figcaption>{{ $userBlogDetails->pictureCaption }}</figcaption>
                @else
                <img class="pt-4" src="{{asset('frontend/images/default.jpg')}}" class="img-responsive" alt="image post" style="width: 100%; height: 60%;">

                @endif

                  
            </figure>
        
        <h2>{{ $userBlogDetails->title }}</h2>
        <p>{!! $userBlogDetails->content !!}</p>




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



</div>

@endsection()
