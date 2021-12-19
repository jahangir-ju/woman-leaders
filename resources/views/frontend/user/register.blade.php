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
                        <a href="{{ route('userLogin') }}"><input type="submit" name="" value="Login"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
      
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <h3 class="register-heading">Apply as a Employee</h3>

                                <form action="{{ route('user.save') }}" method="post"> @csrf
	                                <div class="row register-form">
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <input type="text"  name="name" class="form-control" placeholder="Name *" value="" />
	                                        </div>

	                                        <div class="form-group">
	                                            <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
	                                        </div>

	                                        <div class="form-group">
	                                            <div class="maxl">
	                                                <label class="radio inline"> 
	                                                    <input type="radio" value="0" name="gender" value="male" checked>
	                                                    <span> Male </span> 
	                                                </label>
	                                                <label class="radio inline"> 
	                                                    <input type="radio" value="1" name="gender" value="female">
	                                                    <span>Female </span> 
	                                                </label>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group">
	                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
	                                        </div>
	                                        <div class="form-group">
	                                            <input type="text" name="phone" minlength="11" maxlength="11" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
	                                        </div>
	                                        <input type="submit" class="btnRegister"  value="Register"/>
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