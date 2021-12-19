@extends('index')
 <link href="{{ asset('backend/node_modules/summernote/dist/summernote-bs4.css') }}" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@section('content')
    
  <div class="col-12 col-lg-8 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Post New Blog</h2>
             
             @include('component.error')

              <form action="{{route('user.blog.create')}}"  class="forms-sample" enctype="multipart/form-data" method="post">@csrf
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Author Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="author" value="{{ session('user_name') }}"   class="form-control p-input" disabled="">
                      </div>
                  </div>

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
                            <option>
                                Select Category
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
                      <label for="exampleTextarea2" class="col-sm-3 col-form-label">Write Blog</label>
                      <div class="col-sm-9">
                        <textarea id="summernoteExample" name="content"></textarea>
                      </div>
                  </div>

                  <div class="form-group row mb-4">
                      <label class="col-sm-3 col-form-label">Upload Picture</label>
                      <div class="col-sm-9">
                        <input type="file" id="files" name="file">
                      </div>
                  </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Picture Caption</label>
                      <div class="col-sm-9">
                        <input type="text" name="pictureCaption"   class="form-control p-input" id="exampleInputPassword2">
                      </div>
                  </div>

                  <button type="submit" class="btn btn-success mt-4">Post</button>
              </form>
          </div>
      </div>
  </div>

  <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}">
</script>
<script src="{{asset('backend/node_modules/popper.js/dist/umd/popper.min.js')}}">
</script>
<script src="{{asset('backend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}">
</script>
<script src="{{asset('backend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}">
</script>
<script src="{{asset('backend/node_modules/flot/jquery.flot.js')}}">
</script>
<script src="{{asset('backend/node_modules/flot/jquery.flot.resize.js')}}">
</script>
<script src="{{asset('backend/node_modules/flot/jquery.flot.categories.js')}}">
</script>
<script src="{{asset('backend/node_modules/flot/jquery.flot.pie.js')}}">
</script>
<script src="{{asset('backend/node_modules/rickshaw/vendor/d3.v3.js')}}">
</script>
<script src="{{asset('backend/node_modules/rickshaw/rickshaw.min.js')}}">
</script>
<script src="{{asset('backend/bower_components/chartist/dist/chartist.min.js')}}">
</script>
<script src="{{asset('backend/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}">
</script>
<script src="{{asset('backend/node_modules/chart.js/dist/Chart.min.js')}}">
</script>
<script src="{{asset('backend/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}">
</script>
<script src="{{asset('backend/js/off-canvas.js')}}">
</script>
<script src="{{asset('backend/js/hoverable-collapse.js')}}">
</script>
<script src="{{asset('backend/js/misc.js')}}">
</script>
<script src="{{asset('backend/js/settings.js')}}">
</script>
<script src="{{asset('backend/js/dashboard_1.js')}}"></script>
<script src="{{asset('backend/node_modules/inputmask/dist/inputmask/phone-codes/phone.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/jquery.inputmask.bundle.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/inputmask/phone-codes/phone-be.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/inputmask/phone-codes/phone-ru.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/inputmask/bindings/inputmask.binding.js')}}"></script>
    <script src="{{ asset('backend/node_modules/summernote/dist/summernote-bs4.min.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/inputmask/phone-codes/phone.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/jquery.inputmask.bundle.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/inputmask/phone-codes/phone-be.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/inputmask/phone-codes/phone-ru.js')}}"></script>
  <script src="{{asset('backend/node_modules/inputmask/dist/inputmask/bindings/inputmask.binding.js')}}"></script>
    <script src="{{ asset('backend/node_modules/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script src="{{ asset('backend/js/editorDemo.js') }}"></script>
    <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/misc.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>

@endsection
