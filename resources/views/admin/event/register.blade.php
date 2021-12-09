@extends('admin.layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
       
          <h2 class="card-title">Registered People <a href="{{route('blog.create')}}"></a></h2>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead class="bg-info">
                <tr>
                  <th>#</th>
                  <th>First name</th>
                  <th>last Name</th>
                  <th>Email Address</th>
                  <th>Event Name</th>
                  <th>Phone</th>    
                </tr>
              </thead>
         
              
          <tbody>
            @foreach($registerpeoples as $registerpeople)
          
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$registerpeople->firstname}}</td>
                  <td>{{$registerpeople->lastname}}</td>
                  <td>{{$registerpeople->email}}</td>
                  <td>{{$registerpeople->eventId}}</td>
                  <td>{{$registerpeople->phone}}</td>
                </tr>
           @endforeach
                
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</script>
@endsection