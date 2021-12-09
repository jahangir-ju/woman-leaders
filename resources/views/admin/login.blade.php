<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Admin Panel Login</title>

  <link rel="stylesheet" href="{{asset('backend/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/node_modules/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <link rel="shortcut icon" href="{{asset('backend/images/favicon.html')}}" />
</head>


<body class="sidebar-dark">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Login</h3>

              <form action="{{route('admin-login')}}" method="post">@csrf
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" name="admin_email" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" name="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                  <a href="#" class="google-login btn btn-google">Google+</a>
                </div>
                <small class="text-center d-block">Don't have an Account?<a href="#"> Sign Up</a></small>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('backeend/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('backeend/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('backeend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backeend/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('backeend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backeend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backeend/js/misc.js')}}"></script>
  <script src="{{asset('backeend/js/settings.js')}}"></script>
  <!-- endinject -->
</body>


</html>
