<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ asset('Frontend/css/register.css') }}" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container register">
           @include('component.error')
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Women Leaders blog</p>
                        <a href="{{ route('userRegister') }}"><input type="submit" name="" value="Register"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
      
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <h3 class="register-heading">User Login</h3>

                                <form action="{{ route('user.login') }}" method="post"> @csrf
                                  <div class="row register-form">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="email" name="user_email" class="form-control" placeholder="Your Email *" value="" />
                                          </div>

                                          <div class="form-group">
                                              <input type="password" name="user_password" class="form-control" placeholder="Password *" value="" />
                                          </div>

                                          <input type="submit" class="btnRegister"  value="Login"/>
                                      </div>
                  
                                  </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>