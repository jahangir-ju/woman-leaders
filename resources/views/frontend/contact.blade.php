@extends('index')
<link rel="stylesheet" href="{{asset('../Frontend/css/contact.css')}}">
@section('content')

<div id="contact">
    <h2>Contact Us</h2>
        <div class="row">
        
            <div class="col-md-8 col-lg-8">
                <h4>Our Location</h4>
                
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="634" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Kallynpur,%20Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
            </div>
            <div class="col-md-4 col-lg-4">
                    <h3>Contact Info</h3>
                    <p>Address : Kallynpur, Dhaka, Bangladesh</p>
                    <p>Phone : 01947661208</p>
                    <p>Email : jahangir.bsc6@gmail.com</p>
            </div>
        <div>
<div>



@endsection