@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- banner start -->
 
<section class="inner_banner pp" style="
    background: url({{asset($inner_banner->image)}}); background-repeat: no-repeat; ">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="inner_text text-center">
          <h1>{{$inner_banner->title}}</h1>
        </div>  
      </div>
    </div>
  </div>
</section>
<!-- banner end -->
<!-- featured sec -->
<section class="contact_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="row">
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
            <img src="{{asset($cms_contact1->image)}}" class="img-responsive" alt="">  
          </div>
          <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
            <div class="con_text">
               <h3>{{$cms_contact1->name}}</h3>
                 <?= html_entity_decode($cms_contact1->content) ?>
               <div class="clearfix"></div>
               <div class="social_div">
                  <ul class="list-inline">
                    <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(1962) }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="{{App\Http\Traits\HelperTrait::returnFlag(1963) }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
            </div>  
          </div>
        </div>
        <div class="row"> 
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="address"> 
              <h4>Address:</h4>
               <p>{{App\Http\Traits\HelperTrait::returnFlag(519) }} </p>
               <hr>
            </div>  
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <div class="address"> 
                <h4>Phone:</h4>
                <p><a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}" style="color: #777777;">{{App\Http\Traits\HelperTrait::returnFlag(59) }} </a></p>
                <hr>
             </div> 
          </div>  
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <div class="address"> 
                <h4>Email:</h4>
                <p><a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}" style="color: #777777;">{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a></p>
                <hr>
             </div> 
          </div>
        </div>  
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="contact_form">
          <form method="post" action="{{route('contactUsSubmit')}}">
            @csrf
            <input class="@error('name') is-danger @enderror" name="name" type="text" placeholder="Name" required="">
            @error('name')
              <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
            @enderror

            <input class="@error('email') is-danger @enderror" name="email" type="email" placeholder="Email" required="">
            @error('email')
              <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
            @enderror

            <input class="@error('subject') is-danger @enderror" name="subject" type="text" placeholder="Subject" required="">
            @error('subject')
              <p class="help is-danger" style="color: red;">{{ $errors->first('subject') }}</p>
            @enderror

            <textarea class="@error('message') is-danger @enderror" name="message" placeholder="Message" required=""></textarea>
            @error('message')
              <p class="help is-danger" style="color: red;">{{ $errors->first('message') }}</p>
            @enderror

            <input type="submit" value="submit Now">
          </form>
        </div>  
      </div>
    </div>
  </div>
</section>

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