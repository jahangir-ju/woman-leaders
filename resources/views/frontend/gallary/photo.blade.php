@extends('index')
<link rel="stylesheet" href="{{asset('Frontend/css/photo.css')}}">
@section('content')

<div class="container">
  <h2>Photo Gallary</h2>

  <div class="row">
      <div class="row d-flex flex-wrap align-items-center">

          <div class="col-md-4">
            <div class="imageContainer">
                <img src="{{ asset('Frontend/images/1.jpg') }}" alt="Notebook" style="width:100%;">
                <div class="content">
                  <h4>Heading</h4>
                </div>
            </div>
        </div>

        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/2.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/3.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/4.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
          <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/5.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/6.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/7.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/8.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>      
                 </div>
          </div>
        </div>
         <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/9.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h4>Heading</h4>
              </div>
          </div>
        </div>

      </div>
  </div>
 </div> 

@endsection