@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- banner start -->
 
<section class="inner_banner vr" style="
    background: url({{asset($inner_banner->image)}}); background-repeat: no-repeat;">
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

<section class="vr_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="row">
            <div class="srip_div">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
               <img src="{{asset($cms_rental2->image)}}" class="img-responsive" alt=""> 
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <?= html_entity_decode($cms_rental2->content) ?>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="row"> 
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="main_heading text-center">
          <h5><strong>{{$cms_rental1->name}}</strong></h5>
           <?= html_entity_decode($cms_rental1->content) ?>
        </div>  
      </div>
    </div>
    <div class="row">
      @foreach($locations as $locate)
      <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="vr_div">
           <img src="{{asset($locate->image)}}" class="img-responsive" alt="">
           <h4>{{$locate->name}}</h4>
           <a href="{{route('vacation_property', $locate->id)}}" class="blue_btn"> View Detail</a>
         </div>
      </div>
      @endforeach      
      <!-- <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="vr_div">
           <img src="{{asset('images/vr_2.jpg')}}" class="img-responsive" alt="">
           <h4>Los Angeles</h4>
           <a href="#" class="blue_btn"> View Detail</a>
         </div>
      </div> -->      
      <!-- <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="vr_div">
           <img src="{{asset('images/vr_3.jpg')}}" class="img-responsive" alt="">
           <h4>Chicago</h4>
           <a href="#" class="blue_btn"> View Detail</a>
         </div>
      </div> -->
    </div>
     <!-- <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="vr_div">
           <img src="{{asset('images/vr_4.jpg')}}" class="img-responsive" alt="">
           <h4>Boston</h4>
           <a href="#" class="blue_btn"> View Detail</a>
         </div>
      </div>      
      <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="vr_div">
           <img src="{{asset('images/vr_5.jpg')}}" class="img-responsive" alt="">
           <h4>Los Angeles</h4>
           <a href="#" class="blue_btn"> View Detail</a>
         </div>
      </div>      
      <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="vr_div">
           <img src="{{asset('images/vr_6.jpg')}}" class="img-responsive" alt="">
           <h4>Chicago</h4>
           <a href="#" class="blue_btn"> View Detail</a>
         </div>
      </div>
    </div> -->
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