@extends('admin.layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
       
          <h2 class="card-title">Manage News <a href="{{route('news.create')}}"> <button class="btn btn-primary btn-sm">add</button></a> </h2>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead class="bg-info">
                <tr>
                  <th>#</th>
                  <th>Title ID</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Action</th>
               
                </tr>
              </thead>
              <tbody>
              
     
            <tr>
                @foreach($news2 as $news0)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$news0->title}}</td>
                  <td>{{$news0->category->name}}</td>
                  <td>
                    
                    @if($news0->status==1)
                        <a href="{{route('unactive.news',$news0->id)}}"><label class="badge badge-info">Active</label></a>
                      @else
                        <a href="{{route('active.news',$news0->id)}}"><label class="badge badge-warning">Unactive</label></a>
                       @endif  
                  </td>
                    <td>
                          <a href="{{route('news.edit',$news0->id)}}" class="btn btn-primary btn-sm">edit</a>
                          <a href="{{route('news.view',$news0->id)}}" class="btn btn-success btn-sm">view</a>
                                    
                               
                        <form method="post" class="delete_form" action="{{route('news.destroy',$news0->id)}}"> @csrf
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
 {{ $news2->links() }}

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