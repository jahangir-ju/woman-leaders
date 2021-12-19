@extends('admin.layout')
@section('admin_content')
  <div class="col-12 col-lg-8 grid-margin">
      <div class="card">
          <div class="card-body">
              <h2 class="card-title">Event create</h2>
                @include('component.error')

              <form action="{{route('event.save')}}"  class="forms-sample" enctype="multipart/form-data" method="post">@csrf
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Event Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="eventName" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Event Date</label>
                      <div class="col-sm-9">
                         <input class="form-control" type="date" name="date" />
                      </div>
                      
                  </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Event Time</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="time" name="time" />
                        </div>
                      
                    </div>
                      <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Location</label>
                      <div class="col-sm-9">
                        <input type="text" name="location" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Speaker Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="speaker" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Speaker Designation</label>
                      <div class="col-sm-9">
                        <input type="text" name="speakerDesignation" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                    </div>  
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Speaker Institute</label>
                      <div class="col-sm-9">
                        <input type="text" name="speakerInstitute" class="form-control p-input" id="exampleInputEmail2" aria-describedby="emailHelp2" placeholder="">
                      </div>
                      
                    </div>
                     <div class="form-group row mb-4">
                      <label class="col-sm-3 col-form-label">Speaker Picture</label>
                      <div class="col-sm-9">
                        <input type="file" id="files" name="speakerImage" multiple>

                      </div>
                  </div>                              
              
                  <div class="form-group row">
                      <label for="exampleTextarea2" class="col-sm-3 col-form-label">Event Description </label>
                      <div class="col-sm-9">
                         <textarea id="summernoteExample" name="description"></textarea>
                      
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Status</label>
                      <div class="col-sm-9">
                        <input id="inlineCheckbox1" name="status" type="checkbox" value="1">Publish
                      </div>
                  </div>
                  <div class="form-group row mb-4">
                      <label class="col-sm-3 col-form-label">Event Picture</label>
                      <div class="col-sm-9">
                        
                         <input type="file" id="files" name="eventImage">
                      </div>
                  </div>

                  <button type="submit" class="btn btn-success mt-4">Submit</button>
              </form>
          </div>
      </div>
  </div>


@endsection