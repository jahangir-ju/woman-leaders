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
                                      <a href=""><img class="pt-4" src="{{asset('Frontend/images/news.JPG')}}" class="img-responsive" alt="image post"></a>
                                  </div>
                              
                              </div>
                              <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                                  <div class="caption">
                                      <h3 class="md-heading"><a href="{{route('view_blog',$blog->id)}}">{{$blog->title}}</a></h3>
                                      <p>{{ $blog->short_content  }}</p>
                                      <a class="btn btn-default" href="#" role="button">Read More</a>
                                  </div>
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

        <div class="moduletable">
    
          <h3>Category</span> </h3>
          
          <div class="module-body">
            <div class="custom">
              <ul>

                 <?php 
                        $category =DB::table('categories')->
                    get();
                        foreach ($category as $v_category){?>
                    <li><a href="{{ route('blog_by_category', $v_category->id) }}">{{$v_category->name}}</a></li>  
                   
                  <?php }?>
                           
              </ul>
            </div>
          </div>
          
        </div>
        <div class="moduletable">
    
          <h3>Archives</span> </h3>
          
          <div class="module-body">
            <div class="custom">
              <ul>
                <li><a href=""> January </a></li>
                <li><a href=""> February </a></li>
                <li><a href=""> March </a></li>
                <li><a href=""> April </a></li>
                <li><a href=""> May </a></li>
                <li><a href=""> June </a></li>
                <li><a href=""> July </a></li>
                <li><a href=""> September </a></li>
                <li><a href=""> October </a></li>
                <li><a href=""> November </a></li>
                <li><a href=""> December </a></li>
              </ul>
            </div>
          </div>
          
        </div>

      </div><!---------Left Module start------>

        <div class="clearfix"></div>
    </div>

  

  @endsection()
