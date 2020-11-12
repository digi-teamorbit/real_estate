@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- banner start -->
 
<section class="inner_banner" style="
    background: url({{asset($inner_banner->image)}}); 
    padding: 13% 0;
    background-position: top center;
    background-size: cover;
    position: relative;
     background-repeat: no-repeat;">
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
<!-- online sec  -->
@include('widgets.online_section')

<!-- about_sec -->

<section class="about_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_text">
          <h5>{{$cms_about1->page_name}}</h5>
          <h3>{{$cms_about1->name}}</h3>
          <?= html_entity_decode($cms_about1->content) ?>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_img"> <img src="{{asset($cms_about1->image)}}" class="img-responsive" alt=""> </div>
      </div>
    </div>
     <div class="row rev">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_img"> <img src="{{asset($cms_about2->image)}}" class="img-responsive" alt=""> </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="about_text">
          <h5>{{$cms_about2->page_name}}</h5>
          <h3>{{$cms_about2->name}}</h3>
          <?= html_entity_decode($cms_about2->content) ?>
        </div>
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