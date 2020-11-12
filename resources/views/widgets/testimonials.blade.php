<?php

$testimonials=DB::table('testimonials')->get();
$cms_test=DB::table('pages')->where('id', 17)->first();

?>

<!-- customer review  -->
<section class="review_sec" style="
    background: url({{asset($cms_test->image)}}); 
    background-position: top center;
    background-size: cover;
    background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3 class="bottom text-center">{{$cms_test->name}}</h3>
        <div class="carousel slide" data-ride="carousel" id="myCarousel"> 
          <!-- Indicators -->
          <?php
          $counter1=0;
          $counter2=0;
          ?>
          <ol class="carousel-indicators">
            @foreach($testimonials as $key=>$test)
            <li class="{{ $counter1 == 0 ? 'active' : '' }}" data-slide-to="{{$key}}" data-target="#myCarousel"><img alt="0ne" class="img-circle" src="{{asset($test->image)}}"></li>
            <!-- <li data-slide-to="1" data-target="#myCarousel"><img alt="0ne" class="img-circle" src="{{asset('images/re_2.jpg')}}"></li> -->
            <!-- <li data-slide-to="2" data-target="#myCarousel"><img alt="0ne" class="img-circle" src="{{asset('images/re_3.jpg')}}"></li> -->
            <!-- <li data-slide-to="3" data-target="#myCarousel"><img alt="0ne" class="img-circle" src="{{asset('images/re_4.jpg')}}"></li> -->
            <!-- <li data-slide-to="4" data-target="#myCarousel"><img alt="0ne" class="img-circle" src="{{asset('images/re_5.jpg')}}"></li> -->
            <?php $counter1++; ?>
            @endforeach
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            @foreach($testimonials as $test)
            <div class="item {{ $counter2 == 0 ? 'active' : '' }}">
              <div class="review_text"> <img alt="" class="img-responsive" src="{{asset('images/qoute.png')}}">
                <?= html_entity_decode($test->comments) ?>
                <div class=" col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                  <div class="client_img text-left"> <img src="{{asset($test->image)}}" class="img-circle" alt="">
                    <h4>{{$test->name}}</h4>
                    <p>{{$test->verified}}</p>
                  </div>
                </div>
              </div>
            </div>
            <?php $counter2++; ?>
            @endforeach
            <!-- <div class="item">
              <div class="review_text"> <img alt="" class="img-responsive" src="{{asset('images/qoute.png')}}">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <div class=" col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                  <div class="client_img text-left"> <img src="{{asset('images/re_6.jpg')}}" class="img-circle" alt="">
                    <h4>Jimmy T.</h4>
                    <p>M.S. student at Columbia University</p>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="item">
              <div class="review_text"> <img alt="" class="img-responsive" src="{{asset('images/qoute.png')}}">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <div class=" col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                  <div class="client_img text-left"> <img src="{{asset('images/re_6.jpg')}}" class="img-circle" alt="">
                    <h4>Jimmy T.</h4>
                    <p>M.S. student at Columbia University</p>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="item">
              <div class="review_text"> <img alt="" class="img-responsive" src="{{asset('images/qoute.png')}}">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <div class=" col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                  <div class="client_img text-left"> <img src="{{asset('images/re_6.jpg')}}" class="img-circle" alt="">
                    <h4>Jimmy T.</h4>
                    <p>M.S. student at Columbia University</p>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="item">
              <div class="review_text"> <img alt="" class="img-responsive" src="{{asset('images/qoute.png')}}">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <div class=" col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                  <div class="client_img text-left"> <img src="{{asset('images/re_6.jpg')}}" class="img-circle" alt="">
                    <h4>Jimmy T.</h4>
                    <p>M.S. student at Columbia University</p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- customer review  --> 