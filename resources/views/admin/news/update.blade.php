@extends('admin.layout')
@section('admin_content')
    
<div class="col-12 col-lg-8 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Update news Information </h2>

            <form action="{{route('news.update',$edit->id)}}"  class="forms-sample" enctype="multipart/form-data" method="post">@csrf
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Title</label>
                    <div class="col-sm-9">
                      <input type="text" value="{{$edit->title}}" name="title_blog" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Select Category</label>
                    <div class="col-sm-9">

                       <select class="form-control" value="{{$edit->category}}" name="category_blog">
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
                    <label for="exampleTextarea2" class="col-sm-3 col-form-label">News</label>
                    <div class="col-sm-9">
                      <input class="form-control p-input" value="{{$edit->content}}" name="content" id="exampleTextarea2">
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