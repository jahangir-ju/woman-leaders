@extends('admin.layout')
@section('admin_content')
    
  <div class="col-12 col-lg-8 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Update Information form</h2>

              <form action="{{route('blog.update',$blog_edit->id)}}"  class="forms-sample" enctype="multipart/form-data" method="post">@csrf
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Blog Title</label>
                      <div class="col-sm-9">
                        <input type="text" name="title_blog" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Select Category</label>
                      <div class="col-sm-9">

                         <select class="form-control" name="category_blog">
                            <option value="1">
                                category 1
                             </option>
                            <option value="2">
                                 category 1
                            </option>
            
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">User Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="user_id" value="10"  class="form-control p-input" id="exampleInputPassword2">
                      </div>
                  </div>
              
                  <div class="form-group row">
                      <label for="exampleTextarea2" class="col-sm-3 col-form-label">Write Blog</label>
                      <div class="col-sm-9">
                        <textarea class="form-control p-input" name="content" id="exampleTextarea2" rows="15"></textarea>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <input id="inlineCheckbox1" name="status" type="checkbox" value="1">Publish
                      </div>
                  </div>
                  <div class="form-group row mb-4">
                      <label class="col-sm-3 col-form-label">Upload file</label>
                      <div class="col-sm-9">
                        <label for="exampleInputFile" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                        <input type="file" name="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp2">
                      </div>
                      <small id="fileHelp2" class="form-text text-muted ml-3">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                  </div>


                  <button type="submit" class="btn btn-success mt-4">Submit</button>
              </form>
          </div>
      </div>
  </div>

@endsection