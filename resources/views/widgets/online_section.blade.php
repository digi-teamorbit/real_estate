<?php

$cms1= DB::table('pages')->where('id', 3)->first();
$cms2= DB::table('pages')->where('id', 4)->first();
$cms3= DB::table('pages')->where('id', 5)->first();

?>

<!-- online sec  -->
<section class="online_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="on_div text-center"> <img src="{{asset($cms1->image)}}" class="img-responsive" alt="">
          <h3>{{$cms1->name}}</h3>
          <?= html_entity_decode($cms1->content) ?>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="on_div text-center"> <img src="{{asset($cms2->image)}}" class="img-responsive" alt="">
          <h3>{{$cms2->name}}</h3>
          <?= html_entity_decode($cms2->content) ?>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="on_div text-center"> <img src="{{asset($cms3->image)}}" class="img-responsive" alt="">
          <h3>{{$cms3->name}}</h3>
          <?= html_entity_decode($cms3->content) ?>
        </div>
      </div>
    </div>
  </div>
</section>