@extends('admin.layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
       
          <h2 class="card-title">Manage Blog <a href="{{route('blog.create')}}"> <button class="btn btn-primary btn-sm">add</button> </a></h2>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead class="bg-info">
                <tr>
                  <th>#</th>
                  <th>Title ID</th>
                  <th>Category Name</th>
                  <th>Total View</th>
                  <th>Status</th>
                  <th>Action</th>
               
               
                </tr>
              </thead>
         
              
          <tbody>
            @foreach($blog as $blogs)
          
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$blogs->title}}</td>
                  <td>{{$blogs->category_id}}</td>
                  <td>{{$blogs->post_view}}</td>
                    <td>
                      @if($blogs->status==1)
                        <a href="{{route('blog.unactive',$blogs->id)}}"><label class="badge badge-info">Active</label></a>
                      @else
                        <a href="{{route('blog.active',$blogs->id)}}"><label class="badge badge-warning">Unactive</label></a>
                       @endif                
                    </td>

                      <td>
                          <a href="{{route('blog.edit',$blogs->id)}}" class="btn btn-primary btn-sm">edit</a>
                          <a href="{{route('blog.view',$blogs->id)}}" class="btn btn-success btn-sm">view</a>
                                    
                      
                        
                               
                        <form method="post" class="delete_form" action="{{route('blog.destroy',$blogs->id)}}"> @csrf
                          <button type="submit" onclick="" class="btn btn-danger btn-sm">Delete</button>
                         </form>
                      </td>
       

                </tr>
              @endforeach
                
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