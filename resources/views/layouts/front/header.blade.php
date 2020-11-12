<?php $segment = Request::segments();?>

<!-- heder start  -->
<header>
  <div class="topSec">
    <div class="container">
      <div class="col-md-6 col-sm-6 col-xs-12 ">
        <div class="login_div">
          <ul class="list-inline pull-left">
            @if (Auth::guest())
            <li><a href="{{route('signin')}}"> <img src="{{asset('images/icon_1.png')}}" class="img-responsive" alt="">Login or Register </a></li>
            @else
            <li><a href="{{route('account')}}"> <img src="{{asset('images/icon_1.png')}}" class="img-responsive" alt="">My Account</a></li>
            @endif
            <li><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}"> <img src="{{asset('images/icon_2.png')}}" class="img-responsive" alt="">{{App\Http\Traits\HelperTrait::returnFlag(218) }} </a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12 ">
        <div class="social_icon">
          <ul class="list-inline pull-right">
            <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(1963) }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="menuSec">
    <div class="container">
      <div class="col-md-5 hidden-sm hidden-xs">
        <ul>
          <li><a class="{{request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home </a></li>
          <li><a class="{{request()->routeIs('about') ? 'active' : '' }}" href="{{route('about')}}" class="active"> About us </a></li>
          <li><a class="{{request()->routeIs('tenant_1') ? 'active' : '' }}" href="{{route('tenant_1')}}">Tennant Portal</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-6"> <a href="{{route('home')}}"><img src="{{asset($logo->img_path)}}" alt="img"/></a> </div>
      <div class="col-md-5 hidden-sm hidden-xs">
        <ul >
          <li><a class="{{request()->routeIs('vacation_rental') ? 'active' : '' }}" href="{{route('vacation_rental')}}">Vacation Rentals </a></li>
          <li><a class="{{request()->routeIs('contact') ? 'active' : '' }}" href="{{route('contact')}}"> Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

<!-- heder end  --> 