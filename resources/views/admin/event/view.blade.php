@extends('admin.layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
       
          <h2 class="card-title">Manage Events  <a href="{{route('event.create')}}"><button class="btn btn-primary btn-sm">add</button></a></h2>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead class="bg-info">
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Location</th>
                  <th>Speaker</th>
                  <th>Status</th>
                  <th>Action</th>        
                </tr>
              </thead>
              <tbody>
              @foreach($events as $event)

                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$event->eventName}}</td>
                  <td>{{$event->date}}</td>
                  <td>{{$event->time}}</td>
                  <td>{{$event->location}}</td>
                  <td>{{$event->speaker}}</td>
                  <td>
                      @if($event->status==1)
                        <a href="{{route('event.unactive',$event->id)}}"><label class="badge badge-info">Active</label></a>
                      @else
                        <a href="{{route('event.active',$event->id)}}"><label class="badge badge-warning">Unactive</label></a>
                       @endif                
                    </td>

                      <td>
                          <a href="{{route('event.edit',$event->id)}}" class="btn btn-primary btn-sm">edit</a>
                          <a href="{{route('event.view',$event->id)}}" class="btn btn-success btn-sm">view</a>
           
                               
                        <form method="post" class="delete_form" action="{{route('event.destroy',$event->id)}}"> @csrf
                          <button type="submit" onclick="" class="btn btn-danger btn-sm">Delete</button>
                         </form>
                      </td>

                </tr>
              @endforeach()
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
     $('.delete_form').on('submit', function(){
      if(confirm("Are you sure you want to delete it?"))
      {
       return true;
      }
      else
      {
       return false;
      }
     });
    });
</script>
@endsection