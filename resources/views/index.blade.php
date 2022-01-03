<!DOCTYPE html>
<html>
<head>
<title>Women leaders</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/nav.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/post.css')}}">


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

                    @if(session('id'))
                     <li class="nav-item">
                      <a class="nav-link" href="{{ route('user.profile') }}"> {{ session('name') }}</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="{{ route('user.logout') }}"> Logout</a>
                    </li>
                    @else
                     <li class="nav-item">
                      <a class="nav-link" href="{{route('userLogin')}}">User Login</a>
                    </li>
                    @endif

                  </ul>
            </div> <!----------------End Top navbar--------------->
              
            <!----------------Start Top Social icon --------------->
            <div class="col-sm-5">
              <div class="socail-icon">
                <a href="https://www.facebook.com/Jahangir.bsc2020/" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="https://www.linkedin.com/in/md-jahangir-alam-8609a0142/" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-instagram"></a>
              </div>
            </div>   <!----------------End Top Social Icon --------------->
          </div>
        </div>
    </div>

  <div class="Blog-tilte">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo-area">
                <img src="{{ asset('frontend/images/logo.png') }}">
            </div>

          </div>
          <div class="col-md-6">
            <div class="title-area">
              <h1>Women leaders</h1>
              <p> Do not be afraid to make decisions</p>
            </div>
          </div>
        </div>
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

   

<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    
</body>
</html>



