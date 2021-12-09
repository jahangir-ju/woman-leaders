   <!----------------Start Inner  nav bar --------------->
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
                        <a class="nav-link" href="">Home</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}">Blog</a>
                    </li>
                    
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Activities
                        </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Peace Promoting</a>
                        <a class="dropdown-item" href="#">Women Empowerment</a>
                        <a class="dropdown-item" href="#">Awarness Raising</a>
                        <a class="dropdown-item" href="#">Publications</a>
                        <a class="dropdown-item" href="#">Skill and leaderShip Developmnets</a>
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
            </div>
        
    </nav>
</div>
</div>   <!----------------End Inner  nav bar --------------->