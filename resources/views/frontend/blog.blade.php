@extends('index')
@section('content')

    <div class="row pt-4">
      <!------------Blog post Modul start-------------->
      <div class="col-md-8">

        <h2>Blog Articles By Topic</h2>
            
           <article class="post vt-post">
              <div class="temp1">
              <h3>Leadership</h3></div>

              @foreach($blogs_view as $blogview)
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href=""><img src="{{asset('Frontend/images/news.JPG')}}" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="{{route('view_blog')}}">{{$blogview->title}}</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                  @endforeach
                

            </article>
          <article class="post vt-post">
              <div class="temp1">
              <h3>Community</h3></div>
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="{{asset('Frontend/images/c.jpeg')}}" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">বাংলাদেশে পুরুষদের চাইতে নারীদের গড় আয়ু বেশি কেন</a></h3>
                              <p> গত সপ্তাহে প্রকাশিত ওই প্রতিবেদন অনুযায়ী, বাংলাদেশে নারীদের গড় আয়ু ৭৫ বছর, যেখানে পুরুষদের গড় আয়ু ৭১ বছর।

                                  এছাড়া বাংলাদেশ পরিসংখ্যান ব্যুরোর সর্বশেষ তথ্য অনুযায়ী বাংলাদেশে নারীদের গড় আয়ু ৭৪.২ বছর। আর পুরুষদের ৭১.১ বছর।

                                  অর্থাৎ নারীদের গড় আয়ু পুরুষদের তুলনায় প্রায় তিন বছর বেশি।

                                  </p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                   <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">The Heading Text Size Should Match</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>

            </article>
          <article class="post vt-post">
              <div class="temp1">
              <h3>Communication</h3></div>
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">The Heading Text Size Should Match</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                   <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">The Heading Text Size Should Match</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>

            </article>
                      <article class="post vt-post">
              <div class="temp1">
              <h3>Life Balance</h3></div>
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">The Heading Text Size Should Match</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                   <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">The Heading Text Size Should Match</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>

            </article>
                      <article class="post vt-post">
              <div class="temp1">
              <h3>Women in the World</h3></div>
                  <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">The Heading Text Size Should Match</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>
                  <hr>
                   <div class="row">
                      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                          <div class="post-type post-img">
                              <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-responsive" alt="image post"></a>
                          </div>
                      
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                          <div class="caption">
                              <h3 class="md-heading"><a href="#">The Heading Text Size Should Match</a></h3>
                              <p> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                              <a class="btn btn-default" href="#" role="button">Read More</a> </div>
                      </div>
                  </div>

            </article>

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
                    <li><a href="">{{$v_category->name}}</a></li>  
                   
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
