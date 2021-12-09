<!DOCTYPE html>
<html>
<head>
<title>Women leaders</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('Frontend/css/social.css')}}">
<link rel="stylesheet" href="{{asset('Frontend/css/nav.css')}}">
<link rel="stylesheet" href="{{asset('Frontend/css/post.css')}}">


</head>
<body>
    <div class="container">
      <div class="before-header">
        <div class="row">
          <!----------------Start Top navbar--------------->
            <div class="col-sm-7">
                <ul class="nav memu">
                    <li class="nav-item ">
                      <a class="nav-link active" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('team')}}">Team</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                  
                  </ul>
            </div> <!----------------End Top navbar--------------->
              
            <!----------------Start Top Social icon --------------->
            <div class="col-sm-5">
              <div class="socail-icon">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-instagram"></a>
              </div>
            </div>   <!----------------End Top Social Icon --------------->
          </div>
        </div>
    </div>
    <div class="Blog-tilte">
      <div class="logo"></div>
      <img src="images/blog_logo.png" height="50px" width="50px">
      <div class="title">
            <h1>Women leaders</h1>
        </div>

    </div>

    <!----------------Start Inner  nav bar --------------->

          @include('frontend/nav')
    <!----------------End Inner  nav bar --------------->

            <div class="inner-site">
                <div class="container">
                    <div id="wrapper">
                            @yield('content')
                    </div>
                </div>
            </div>

    <footer>
      <div class="footer">
        Copyright © 2021 · Progressive Women's Leadership · Privacy Policy
      </div>
    </footer>

   

<script src="{{asset('Frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('Frontend/js/popper.min.js')}}"></script>
<script src="{{asset('Frontend/js/bootstrap.min.js')}}"></script>
    
</body>
</html>



