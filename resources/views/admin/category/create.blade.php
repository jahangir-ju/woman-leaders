@extends('admin.layout')
@section('admin_content')
  <div class="col-12 col-lg-8 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Category Add</h2>
              @include('component.error')          
            
              <form action="{{route('category.save')}}"  class="forms-sample" enctype="multipart/form-data" method="post">@csrf
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Categoary Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="name" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                  </div>
        
              
                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <input id="inlineCheckbox1" name="status" type="checkbox" value="1">Publish
                      </div>
                  </div>
             

                  <button type="submit" class="btn btn-success mt-4">Submit</button>
              </form>
          </div>
      </div>
    </div>
@endsection