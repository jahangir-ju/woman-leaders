@extends('admin.layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
       
          <h2 class="card-title">Manage Category <a href="{{route('category.create')}}"> <button class="btn btn-primary btn-sm">add</button></a></h2>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead class="bg-info">
                <tr>
                  <th>#</th>
                  <th>Category name</th>
                  <th>Status</th>
      
               
                </tr>
              </thead>
              <tbody>
              
     
            <tr>   
               @foreach($category as $categories)
                <tr>
                  <td>{{$loop->index+1}}</td>
        
                  <td>{{$categories->name}}</td>
                   <td>
                    @if($categories->status==1)
                      <a href="{{route('category.unactive',$categories->id)}}"><label class="badge badge-info">Active</label></a>
                    @else
                      <a href="{{route('category.active',$categories->id)}}"><label class="badge badge-warning">Unactive</label></a>
                     @endif                
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
@endsection