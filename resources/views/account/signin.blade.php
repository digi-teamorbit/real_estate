<?php

$inner_banner=DB::table('inner_banners')->where('id', 17)->first();

?>


@extends('layouts.main')
@section('content')


<!-- banner_sec -->
<!-- <section class="banner_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="inner_text wow fadeInUp" data-wow-duration="2s">
          <h1>Sign In</h1>
        </div>  
      </div>
    </div>
  </div>
</section> -->
<!-- banner_sec -->


<!-- banner start -->
 
<section class="inner_banner pp" style="background: url({{asset($inner_banner->image)}}) no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="inner_text text-center">
          <h1>Sign In</h1>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- banner end -->


<section class="InnerContent Login">
         <div class="container">
            <div class="col-xs-12 col-sm-6">
              <h2>Login To Your Account</h2>
             <form method="POST" class="loginForm" id="login" action="{{ route('login') }}">
                @csrf
               <div class="form-group">
                  <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong class="validate_css" >{{ $errors->first('email') }}</strong>
                    </span>
                @endif
               </div>
               <div class="form-group">
                  <label>Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password">
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong class="validate_css">{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
               </div>
               <div class="form-group">
                  <label class="remember"><input type="checkbox"> Remember me </label>
                  <a href="{{ url('password/reset') }}" class="pull-right forg_text"> Forgot password? </a>
               </div>
               <div class="form-group">
                  <input type="submit" class="Submit_btn" value="Log In">
               </div>
             </form>
            </div>

            <div class="col-xs-12 col-sm-6 register_area">
              <h2>Register Now</h2>
            <form class="loginForm" id="signup" method="POST" action="{{ route('register') }}">
              @csrf
               <div class="form-group">
                  <label>Your Name</label>
                <input type="text" class="form-control {{ $errors->registerForm->has('name') ? ' is-invalid' : '' }}" placeholder="Your Name" name="name" id="name"required>
                   @if ($errors->registerForm->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong class="validate_css">{{ $errors->registerForm->registerForm->first('name') }}</strong>
                  </span>
                   @endif
               </div>
               <div class="form-group">
                  <label>Email </label>
            <input type="email" class="form-control {{ $errors->registerForm->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" id="signup-email" required>
             @if ($errors->registerForm->has('email'))
              <span class="invalid-feedback" role="alert">
              <strong class="validate_css">{{ $errors->registerForm->first('email') }}</strong>
              </span>
             @endif
               </div>

            <div class="form-group">
                  <label>Password </label>
                  <input type="password" class="form-control {{ $errors->registerForm->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" id="signup-password" required>
                  @if ($errors->registerForm->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong class="validate_css">{{ $errors->registerForm->first('password') }}</strong>
                    </span>
                   @endif
            </div>
            <div class="form-group">
                  <label>Confirm Password </label>
            <input type="password" class="form-control" placeholder="Retype Password" name="password_confirmation" id="signup-password" required>
                  @if ($errors->registerForm->has('password_confirmation'))
                    <span class="invalid-feedback" role="alert">
                    <strong class="validate_css">{{ $errors->registerForm->first('password_confirmation') }}</strong>
                    </span>
                   @endif
            </div>
               
               <div class="form-group">
                  <input type="submit" class="Submit_btn" value="Log In">
               </div>
               
             </form>
            </div>
         </div>
</section>



@endsection
@section('css')
<link rel="stylesheet" href="{{asset('css/checkout.css')}}">
<style type="text/css">
.input_icon_button button {
    border: 0;
    padding: 16px 0;
    background-color: #163a57;
    color: #fff;
    display: block;
    text-align: center;
    border-radius: 50px;
    font-size: 18px;
    width: 100%;
}

.loginPage .form-control {
    color: #000;
}

h2 {
    font-size: 40px;
  }

section.InnerContent.Login {
    margin: 60px 0px;
}


input[type="submit"] {
    color: #fff;
    background-color: #a03460;
    height: 55px;
    padding: 0px 65px;
    font-size: 12px;
    line-height: 20px;
    border: 2px solid #a03460;
    border-radius: 6px;
    text-transform: uppercase;
    margin-bottom: 20px;
    font-weight: 600;
    width: 100%;
    display: block;
}

input[type="submit"]:hover {
    transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    background-color: #fff;
    color: #a03460;
    border-color: #a03460;
    }


.register_area::before {
    position: absolute;
    left: 0%;
    top: 80px;
    width: 1px;
    height: 366px;
    background: #a03460;
    content: '';
}


</style>
@endsection
@section('js')

<script>
    $("#dob").datepicker({
        dateFormat: 'yy-m-d',
        SetDate: $('#user_profile_dob').val(),
        widgetPositioning: {
            vertical: 'bottom'
        },
        keepOpen: false,
        useCurrent: false,
        maxDate: moment().add(1, 'h').toDate()
    });
</script>

@endsection
