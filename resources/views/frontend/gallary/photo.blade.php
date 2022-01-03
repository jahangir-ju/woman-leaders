@extends('index')
<link rel="stylesheet" href="{{asset('frontend/css/photo.css')}}">
@section('content')

<div class="container">
  <h2>Photo Gallary</h2>

  <div class="row">
      <div class="row d-flex flex-wrap align-items-center">

          <div class="col-md-4">
            <div class="imageContainer">
                <img src="{{ asset('frontend/images/1.jpg') }}" alt="Notebook" style="width:100%;">
                <div class="content">
                  <h4>Heading</h4>
                </div>
            </div>
        </div>

        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/2.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/3.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/4.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
          <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/5.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/6.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/7.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/8.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>      
                 </div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('frontend/images/9.jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>

      </div>
  </div>
 </div> 

@endsection