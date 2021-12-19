@extends('index')
<link rel="stylesheet" href="{{asset('Frontend/css/photo.css')}}">
@section('content')

<div class="container">
  <h2>Photo Gallary</h2>

  <div class="row">
      <div class="row d-flex flex-wrap align-items-center">
          <div class="col-md-4">

            <div class="imageContainer">
                <img src="{{ asset('Frontend/images/Jahangir.jpg') }}" alt="Notebook" style="width:100%;">
                <div class="content">
                  <h1>Heading</h1>
                  <p>Lorem ipsum..</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
          <div class="imageContainer">
              <img src="{{ asset('Frontend/images/Jahangir.Jpg') }}" alt="Notebook" style="width:100%;">
              <div class="content">
                <h1>Heading</h1>
                <p>Lorem ipsum..</p>
              </div>
          </div>

        </div>
 
      </div>
  </div>
 </div> 

@endsection