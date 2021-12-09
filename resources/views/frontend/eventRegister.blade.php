@extends('index')
@section('content')
  <section class="p-5">

    <center><h2>Personal Information</h2></center> 
    <center><p>Fill out the information below,</p></center>
      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <p>
                      @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  </p>
    <form action="{{route('event.register.store', $registerstore->id)}}" method="post">@csrf

            <div class="form-group">
              <label for="usr"> First Name:</label>
              <input type="text" name="firstname" class="form-control" id="usr">
            </div>

            <div class="form-group">
              <label for="pwd">Last Name</label>
              <input type="text" name="lastname" class="form-control" id="pwd">
            </div>

             <div class="form-group">
              <label for="pwd">Email Address:</label>
              <input type="email" name="email" class="form-control" id="pwd">
            </div>

             <div class="form-group">
              <label for="pwd">Phone Number:</label>
              <input type="text" name="phone" class="form-control" id="pwd">
            </div>

             <div class="form-group">
              <label for="pwd">Address:</label>
              <input type="text" name="address" class="form-control" id="pwd">
            </div>

             <div class="form-group">
              <label for="pwd">occupation:</label>
              <input type="text" name="occupation" class="form-control" id="pwd">
            </div>


          <h6>Terms and Conditions</h6>
          <p>With computer science forming an essential part of a number of key industries, our MSc graduates are highly sought after by employers. Graduates from the Department have gone on to work in companies including Amazon, JP Morgan and Tripadvisor in roles such as IT consultancy, software development, technology consultancy, Java development and back-end engineers.</p>


              <div class="form-check">
              <input class="form-check-input" name="status" value="1" type="checkbox" >
              <label class="form-check-label">

                I agree
            </label>
        </div>
        <button type="submit" class="btn btn-success mt-4">Submit</button>

    </form>
  </section>
   


@endsection