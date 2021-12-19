@extends('index')
@section('content')
    <div class="row pt-4">
  

      <div class="col-md-12">
            <div class="">
        <p>Name:{{ session('user_name') }} </p>
        <a href="{{ route('userBlog') }}">Write Blog</a>
      </div>
        <div class="temp2">
            <h2>Your Blog</h2>
        </div>
            
             <article class="post vt-post">
            
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                         
                           
                              <a href="#"><img src="{{asset('Frontend/images/default.jpg')}}" class="img-responsive" alt="image post"></a>
                        
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="">ldjfpsdofj sdlkfjhsdlhf</a></h3>
                              <p>A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument</p>
                              <a  href="">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                 
             
            </article>
      </div>   
        <div class="clearfix"></div>
    </div>
    
@endsection
      