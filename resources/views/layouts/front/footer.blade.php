<?php $cms=DB::table('pages')->where('id',1)->first();
$cms2=DB::table('pages')->where('id',2)->first();
 ?>

<!-- footer start -->
<div class="footerSec" style="
    background: url({{asset($cms->image)}}); background-position: top center; background-size: cover;">
  <div class="container">
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_footing"> <img src="{{asset($logo->img_path)}}" alt="img" class="footerLogo"/>
        <?= html_entity_decode($cms->content) ?>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_foot">
        <h5>Quick Links</h5>
        <ul class="linkList">
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About Us</a></li>
          <li><a href="{{route('tenant_1')}}">Tennant Portal</a></li>
          <li><a href="{{route('vacation_rental')}}">Vacation Rentals</a></li>
          <li><a href="{{route('contact')}}"> Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_foot">
        <h5>{{$cms2->name}}</h5>
        <?= html_entity_decode($cms2->content) ?>
        <div class="footerForm">
          <form method="post" action="{{route('newsletterSubmit')}}">
            @csrf
          <div class="col-md-10 col-sm-9 col-xs-9 noPadding">
            <input required="" class="@error('email') is-danger @enderror" name="email" type="email" placeholder="Search Here"/>
            @error('email')
              <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
            @enderror
          </div>
          <div class="col-md-2 col-sm-3 col-xs-3 noPadding">
            <button><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </div>
          </form>
          <!-- <div class="icon_div"> <a href="#"> <img src="{{asset('images/icon.png')}}" alt=""></a></div> -->

          <div class="social_icon">
          <ul class="list-inline pull-right">
            <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}"><i class="fa fa-facebook" aria-hidden="true" style=" background: #3B5998; color: white; border-color:#3B5998; width: 35px; height: 35px; border: 0px;"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true" style="background: #dd4b39; color: white; border-color:#3B5998; width: 35px; height: 35px; border: 0px;"></i></a></li>
            <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(1961) }}"><i class="fa fa-pinterest" aria-hidden="true" style="background: #cb2027; color: white; border-color:#3B5998; width: 35px; height: 35px; border: 0px;"></i></a></li>
            <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}"><i class="fa fa-twitter" aria-hidden="true" style="background: #55ACEE; color: white; border-color:#3B5998; width: 35px; height: 35px; border: 0px;"></i></a></li>
                      </ul>
        </div>

        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12">
      <div class="inner_foot">
        <h5>Quick Links</h5>
        <ul class="linkList">
          <li><a href="javascript:void(0)"><i class="fa fa-map-marker" aria-hidden="true"></i>{{App\Http\Traits\HelperTrait::returnFlag(519) }} </a></li>
          <li><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><i class="fa fa-phone" aria-hidden="true"></i>{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a></li>
          <li><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }} "><i class="fa fa-envelope" aria-hidden="true"></i>{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copy_right">
    <div class="container">
      <ul class="list-inline pull-right">
        <li><a href="{{route('terms')}}">Terms & Conditions </a></li>
        <li><a href="javascript:void(0)">| </a></li>
        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
      </ul>
      <p>{{App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
    </div>
  </div>
</div>
<!-- footer end --> 

<style type="text/css">

</style>