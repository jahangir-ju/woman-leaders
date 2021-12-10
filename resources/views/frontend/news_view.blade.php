@extends('index')
@section('content')

<div class="row">
  <div class="col-12 col-md-8">
    <div class="blog-content">

    	<h2 class="pt-3">{{ $news_details->title }}</h2>
    	<p>Publication date :: {{ $news_details->created_at }}</p>
        <img src="{{asset('Frontend/images/b.JPG')}}" alt="Notebook" style="width:100%">
        

        <p class="pt-5">{{$news_details->content }}</p>
    </div>
  </div>


  <div class="col-6 col-md-4">
    <div class="right_header">
      <p>Related News</p>
    </div>
    <div class="right-content">
          <h4>in culpa qui officia deserunt mollit anim id est la!</h4>
    <div class="row">
      <div class="col-6 col-md-8">
        nostrud exercitation ullamco consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
      </div>
        <div class="col-6 col-md-4">
           <img src="{{asset('Frontend/images/b.JPG')}}" alt="Notebook" style="height: 80%; width:100%">
        </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-6 col-md-8">
        nostrud exercitation ullamco consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
      </div>
        <div class="col-6 col-md-4">
           <img src="{{asset('Frontend/images/b.JPG')}}" alt="Notebook" style="height: 80%; width:100%">
        </div>

    </div>
    <hr>
      <div class="row">
      <div class="col-6 col-md-8">
        nostrud exercitation ullamco consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
      </div>
        <div class="col-6 col-md-4">
           <img src="{{asset('Frontend/images/b.JPG')}}" alt="Notebook" style="height: 80%; width:100%">
        </div>

    </div>

 </div>
 </div>
</div>

@endsection()
