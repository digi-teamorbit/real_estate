@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- banner start -->
<section class="main_slider">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="{{asset($banner->image)}}" alt="img">
        <div class="carousel-caption">
          <div class="container">
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
              <div class="banner_text">
                <h3 class="wow fadeInUp" data-wow-duration="2s">{{$banner->title}}</h3>
                <?= html_entity_decode($banner->description) ?>
                <div class="wow fadeInUp" data-wow-duration="2s"> <a href="#" class="blue_btn">Learn More</a> <a href="{{route('contact')}}" class="red_btn">Contact Us</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8"> </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="form_sec wow zoomIn" data-wow-duration="2s">
          <h3>book your stay</h3>
          <form>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <input type="text" placeholder="Full Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Check-In">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Check-Out">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <select>
                    <option >Adults</option>
                    <option ></option>
                    <option ></option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <select>
                    <option >Childrens</option>
                    <option ></option>
                    <option ></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Phone Number">
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="Time">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="Book Now">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- banner end --> 

<!-- online sec  -->
@include('widgets.online_section')

<!-- about_sec -->

<section class="about_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_text wow fadeInLeft" data-wow-duration="2s">
          <h5>{{$cms_about1->page_name}}</h5>
          <h3>{{$cms_about1->name}}</h3>
          <?= html_entity_decode($truncated = Str::limit($cms_about1->content, 475)) ?>
          <p></p>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="check_div">
                <h6><img src="{{asset('images/chk.png')}}" class="img-responsive" alt="">Personalized Service.</h6>
                <h6><img src="{{asset('images/chk.png')}}" class="img-responsive" alt="">24/7 support.</h6>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="check_div">
                <h6><img src="{{asset('images/chk.png')}}" class="img-responsive" alt="">Financing made easy.</h6>
                <h6><img src="{{asset('images/chk.png')}}" class="img-responsive" alt="">Trusted by thousands.</h6>
              </div>
            </div>
          </div>
          <a href="{{route('about')}}" class="blue_btn"> Read More</a> </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_img wow zoomIn" data-wow-duration="2s" > <img src="{{asset($cms_about1->image)}}" class="img-responsive" alt=""> </div>
      </div>
    </div>
  </div>
</section>

<!-- featured sec -->

@include('widgets.featured_exclusives')

<!-- vication rental -->

@include('widgets.vacation_rental')

<!-- customer review  -->
@include('widgets.testimonials')
<!-- customer review  --> 

<!-- lettest news sec  -->
@include('widgets.latest_news')

<!-- login modal  -->
<div class="main_logn">
  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="st_lgn">
          <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6">
              <div class="logn_frm">
                <h2>LOGIN</h2>
                <label>Username or email address *</label>
                <input type="text">
                <label>Password *</label>
                <input type="text">
                <a href="#" class="btn btnGreen">LOGIN</a>
                <label class="conts">Remember me
                  <input type="checkbox">
                  <span class="checkmark"></span> </label>
                <p><a href="#">Lost your password?</a></p>
              </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6">
              <div class="logn_frm">
                <h2>REGISTER</h2>
                <label>Email address *</label>
                <input type="text">
                <label>Password *</label>
                <input type="text">
                <a href="#" class="btn btnGreen">Register</a> <img src="{{asset('images/captcha.jpg')}}" class="img-responsive" alt="img"> </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="lgn_fb"> <a href="#" class="face"><i class="fa fa-facebook "  aria-hidden="true"></i>Login With Facebook</a> <a href="#" class="gogle"><i class="fa fa-google-plus " aria-hidden="true"></i>Login With Google</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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