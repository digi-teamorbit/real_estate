<?php

$cms1=DB::table('pages')->where('id', 9)->first();
$cms2=DB::table('pages')->where('id', 10)->first();

?>
<!-- vication rental -->

<section class="vication_sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="about_text vic wow fadeInLeft" data-wow-duration="2s">
          <h3>{{$cms1->name}}</h3>
          <?= html_entity_decode($cms1->content) ?>
          <a href="javascript:void(0)" class="blue_btn"> Read More</a> </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 pro">
        <div class="vic_img"> <img src="{{asset($cms1->image)}}" class="img-responsive" alt=""> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 plo">
        <div class="vic_img"> <img src="{{asset($cms2->image)}}" class="img-responsive" alt=""> </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="about_text vic wow fadeInRight" data-wow-duration="2s">
          <h3>{{$cms2->name}}</h3>
          <?= html_entity_decode($cms2->content) ?>
          <a href="javascript:void(0)" class="blue_btn"> Read More</a> </div>
      </div>
    </div>
  </div>
</section>