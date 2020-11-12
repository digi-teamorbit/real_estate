@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- banner start -->
 
<section class="inner_banner pp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="inner_text text-center">
          <h1>My Account</h1>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- banner end -->
<!-- featured sec -->

 <!-- myAccount section start   -->
    <div class="myAccountSec inpage">
      <div class="login_content_area">
        <div class="container">
          <div class="col-md-12">
            <div class="col-md-5 login_area">
              <h2>Login</h2>
              <div class="form_area">
                <div class="fields_area">
                  <input name="" type="text" placeholder="Enter you emaill address" class="form-control">
                </div>
                <div class="fields_area">
                  <input name="" type="text" placeholder="Enter your password" class="form-control">
                </div>
                <div class="fields_area custom-control custom-radio pull-left">
                  <input name="" type="checkbox" value=""> Remeber me
                </div>    
                <div class="fields_area custom-control custom-radio pull-right">
                  <input name="" type="checkbox" value="">  Forget Password?
                </div>
                <div class="fields_area buttons_area">
                  <input name="" type="button" value="Login">
                </div>
              </div>
            </div>
            <div class="col-md-5 col-md-offset-1 register_area pull-right">
              <h2>Create an account</h2>
              <div class="form_area">
                <div class="fields_area">
                  <input name="" type="text" placeholder="First name" class="form-control">
                </div>
                <div class="fields_area">
                  <input name="" type="text" placeholder="Last Name" class="form-control">
                </div>
                <div class="fields_area">
                  <input name="" type="text" placeholder="Email" class="form-control">
                </div>
                <div class="fields_area">
                  <input name="" type="text" placeholder="Password" class="form-control">
                </div>
                <div class="fields_area buttons_area">
                  <input name="" type="button" value="Register Now">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- myAccount section end   -->


<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection