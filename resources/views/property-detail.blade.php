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

<section class="property_detail">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="feat_box left"> <img src="{{asset($property_detail->image)}}" class="img-responsive" alt="">
            <div class="frosale"> <a href="#"> For Sale</a></div>
            <div class="price"> <a href="#"> $ {{$property_detail->price}}/M</a></div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="feat_box">
            <div class="feat_text">
              <h6>{{$property_detail->name}}</h6>
              <p>{{$property_detail->address}}</p>
              <ul class="list-inline">
                <li>Beds:{{$property_detail->beds}}</li>
                <li>Baths:{{$property_detail->baths}} </li>
                <li>Sq Ft:{{$property_detail->area}}</li>
              </ul>
              <h5>{{$property_detail->type}}</h5>
              <div class="clearfix"></div>
              <hr>
              <div class="botom"> <a href="#" class="pull-left"><i class="fa fa-user" aria-hidden="true"></i>John Doe</a> <a href="#" class="pull-right">1 Week Ago</a> </div>
            </div>
        </div>
        <!-- <div class="pdt_text">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos </p>
        </div> -->
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="pdt_text">
          <?= html_entity_decode($property_detail->description) ?>
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