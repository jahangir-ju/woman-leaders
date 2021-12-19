@extends('admin.layout')
@section('admin_content')
    
  <div class="col-12 col-lg-8 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Update Information</h2>
               @include('component.error')
              <form action="{{route('blog.update',$blogEdit->id)}}"  class="forms-sample" enctype="multipart/form-data" method="post">@csrf
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Blog Title</label>
                      <div class="col-sm-9">
                        <input type="text" value="{{ $blogEdit->title }}" name="title_blog" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Select Category</label>
                      <div class="col-sm-9">

                         <select class="form-control" name="category_blog">
                            <option value="{{ $blogEdit->category_id }} ">
                                {{ $blogEdit->category->name }}
                             </option>
                               <?php 
                                      $category =DB::table('categories')->
                                  get();
                                      foreach ($category as $v_category){?>
                                  <option value="{{$v_category->id}}">
                                      {{$v_category->name}}
                                  </option>
                                <?php }?>
                         
            
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Author Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="author" value="{{ $blogEdit->author }}"  class="form-control p-input" id="exampleInputPassword2">
                      </div>
                  </div>
              
                  <div class="form-group row">
                      <label for="exampleTextarea2" class="col-sm-3 col-form-label">Write Blog</label>
                      <div class="col-sm-9">
                        <textarea id="summernoteExample" name="content">{{ $blogEdit->content }}</textarea>
                      </div>
                  </div>

                  @if($blogEdit->status ==1)

                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <input id="inlineCheckbox1" name="status" value="1" checked="" type="checkbox">Publish
                      </div>
                  </div>
                  @else
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <input id="inlineCheckbox1" name="status" value="1" type="checkbox">Publish
                      </div>
                  </div>
                  @endif



                  <button type="submit" class="btn btn-success mt-4">Submit</button>
              </form>
          </div>
      </div>
  </div>

@endsection