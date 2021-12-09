@extends('index')
<link rel="stylesheet" href="{{asset('../Frontend/css/phto.css')}}">
@section('content')
<!-- A Lightbox is basically a slider (carousel) inside of a modal.

  Todos: fix active class (when you click on a photo, carousel in modal reverts to first slide) 
 *solution: added data-slide-to and data-target to imgs
-->

<div class="container">


    <div class="row">
        <div class="row d-flex flex-wrap align-items-center" data-toggle="modal" data-target="#lightbox">
            <div class="col-md-4">
            <figure class="figure">
                <img src="https://source.unsplash.com/random/200" class="figure-img img-fluid rounded"  data-target="#indicators" data-slide-to="0" alt="">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
            </div>
            <div class="col-md-4">
            <figure class="figure">
                <img src="https://source.unsplash.com/random/201" class="figure-img img-fluid rounded"  data-target="#indicators" data-slide-to="1" alt="">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
            </div>
            <div class="col-md-4">
            <figure class="figure">
                <img src="https://source.unsplash.com/random/202" class="figure-img img-fluid rounded"  data-target="#indicators" data-slide-to="2" alt="">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
            </div>
            <div class="col-md-4">
            <figure class="figure">
                <img src="https://source.unsplash.com/random/203" class="figure-img img-fluid rounded"  data-target="#indicators" data-slide-to="3" alt="">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
            </div>
            <div class="col-md-4">
            <figure class="figure">
                <img src="https://source.unsplash.com/random/204" class="figure-img img-fluid rounded"  data-target="#indicators" data-slide-to="4" alt="">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
            </div>
            <div class="col-md-4">
            <figure class="figure">
                <img src="https://source.unsplash.com/random/205" class="figure-img img-fluid rounded"  data-target="#indicators" data-slide-to="5" alt="">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
            </figure>
            </div>
        </div>
    </div>
 



    
    <!-- Modal -->
    <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          <div id="indicators" class="carousel slide" data-interval="false">
      <ol class="carousel-indicators">
        <li data-target="#indicators" data-slide-to="0" class="active"></li>
        <li data-target="#indicators" data-slide-to="1"></li>
        <li data-target="#indicators" data-slide-to="2"></li>
        <li data-target="#indicators" data-slide-to="3"></li>
        <li data-target="#indicators" data-slide-to="4"></li>
        <li data-target="#indicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          
          <img class="d-block w-100" src="https://source.unsplash.com/random/200" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://source.unsplash.com/random/201" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://source.unsplash.com/random/202" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://source.unsplash.com/random/203" alt="Fourth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://source.unsplash.com/random/204" alt="Fifth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://source.unsplash.com/random/205" alt="Sixth slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
        </div>
      </div>
    </div>
 </div> 

@endsection