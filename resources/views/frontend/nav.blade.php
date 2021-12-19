<div id="nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="aaa">
                <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span  class="navbar-toggler-icon"></span>
                </button>
            </div>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog')}}">Blog</a>
                        </li>
                        
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Activities
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('peacePromoting') }}">Peace Promoting</a>
                            <a class="dropdown-item" href="{{ route('WomenEmpowerment') }}">Women Empowerment</a>
                            <a class="dropdown-item" href="{{ route('AwarnessRaising') }}">Awarness Raising</a>
                            <a class="dropdown-item" href="{{ route('publications') }}">Publications</a>
                            <a class="dropdown-item" href="{{ route('skillLeadership') }}">Skill and leaderShip Developmnets</a>
                            </div>


                            <!-- <a class="nav-link" href="#">Activities</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('news')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('events')}}">Events</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Gallery</a>
                            <div class="dropdown-menu">

                            <a class="dropdown-item" href="{{route('photo')}}">Photo </a>
                            <a class="dropdown-item" href="{{route('video')}}">Video </a>
                            </div>
                        </li>
             
                    </ul>
                      <form action="{{ route('blog.search') }}" method="get" class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" name="search" type="text" value="{{  request('search') }}" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                </div>
        </nav>
    </div>
</div>   <!----------------End Inner  nav bar --------------->