@extends('index')
<link rel="stylesheet" href="{{asset('frontend/css/team.css')}}">
@section('content')

  <div class="container">
     
    <div class="col-md-12"> 
           <h2 class="teamTitle">Advisor</h2> 
        <div class="row"> 
          <div class="col-md-4">                
                <div class="card">
                  <img src="{{asset('frontend/images/Jahangir.jpg')}}" alt="Avatar" style="width:100%">
                </div>     
          </div>  
          <div class="col-md-8">
            <address style="padding-top: 14px;">
                Name:AAAAAAAAAAAAAAAAAA<br>
                Degination: BBBBBBBBBBBBB<br>
                
                
            </address>      
          </div>
      </div>
    </div>

        <hr/>
      
        <div class="col-md-12">
          <h2 class="teamTitle">Member</h2>
             
          <div class="row"> 
            <div class="col-md-4">          
                <div class="card">
                    <img src="{{asset('frontend/images/Jahangir.jpg')}}" alt="Avatar" style="width:100%">
                  </div>         
            </div>
            <div class="col-md-8">
                <address style="padding-top: 14px;">
                    Name: Md Jahangir Alam<br>
                    Degination: Student<br>
                    Jahangirnagar University<br>
                    Savar
                </address>
            </div>
          </div>
        </div>
  </div>

@endsection