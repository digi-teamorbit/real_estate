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

<section class="property_sec">
  <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="feat_box"> <img src="{{asset('images/ft_1.jpg')}}" class="img-responsive" alt="">
            <div class="frosale"> <a href="#"> For Sale</a></div>
            <div class="price"> <a href="#"> $ 1,900/M</a></div>
            <div class="feat_text">
              <h6>Lorem Ipsum Dolor Sit Amit</h6>
              <p>123 ABC St</p>
              <a href="#" class="blue_btn pull-right">View Details </a>
              <ul class="list-inline">
                <li>Beds:4</li>
                <li>Baths:2 </li>
                <li>Sq Ft:2000</li>
              </ul>
              <h5>Appartment</h5>
              <div class="clearfix"></div>
              <hr>
              <div class="botom"> <a href="#" class="pull-left"><i class="fa fa-user" aria-hidden="true"></i>John Doe</a> <a href="#" class="pull-right">1 Week Ago</a> </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="feat_box"> <img src="{{asset('images/ft_2.jpg')}}" class="img-responsive" alt="">
            <div class="frosale"> <a href="#"> For Sale</a></div>
            <div class="price"> <a href="#"> $ 1,900/M</a></div>
            <div class="feat_text">
              <h6>Lorem Ipsum Dolor Sit Amit</h6>
              <p>123 ABC St</p>
              <a href="#" class="blue_btn pull-right">View Details </a>
              <ul class="list-inline">
                <li>Beds:4</li>
                <li>Baths:2 </li>
                <li>Sq Ft:2000</li>
              </ul>
              <h5>Appartment</h5>
              <div class="clearfix"></div>
              <hr>
              <div class="botom"> <a href="#" class="pull-left"><i class="fa fa-user" aria-hidden="true"></i>John Doe</a> <a href="#" class="pull-right">1 Week Ago</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="feat_box"> <img src="{{asset('images/ft_1.jpg')}}" class="img-responsive" alt="">
            <div class="frosale"> <a href="#"> For Sale</a></div>
            <div class="price"> <a href="#"> $ 1,900/M</a></div>
            <div class="feat_text">
              <h6>Lorem Ipsum Dolor Sit Amit</h6>
              <p>123 ABC St</p>
              <a href="#" class="blue_btn pull-right">View Details </a>
              <ul class="list-inline">
                <li>Beds:4</li>
                <li>Baths:2 </li>
                <li>Sq Ft:2000</li>
              </ul>
              <h5>Appartment</h5>
              <div class="clearfix"></div>
              <hr>
              <div class="botom"> <a href="#" class="pull-left"><i class="fa fa-user" aria-hidden="true"></i>John Doe</a> <a href="#" class="pull-right">1 Week Ago</a> </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="feat_box"> <img src="{{asset('images/ft_2.jpg')}}" class="img-responsive" alt="">
            <div class="frosale"> <a href="#"> For Sale</a></div>
            <div class="price"> <a href="#"> $ 1,900/M</a></div>
            <div class="feat_text">
              <h6>Lorem Ipsum Dolor Sit Amit</h6>
              <p>123 ABC St</p>
              <a href="#" class="blue_btn pull-right">View Details </a>
              <ul class="list-inline">
                <li>Beds:4</li>
                <li>Baths:2 </li>
                <li>Sq Ft:2000</li>
              </ul>
              <h5>Appartment</h5>
              <div class="clearfix"></div>
              <hr>
              <div class="botom"> <a href="#" class="pull-left"><i class="fa fa-user" aria-hidden="true"></i>John Doe</a> <a href="#" class="pull-right">1 Week Ago</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="feat_box"> <img src="{{asset('images/ft_1.jpg')}}" class="img-responsive" alt="">
            <div class="frosale"> <a href="#"> For Sale</a></div>
            <div class="price"> <a href="#"> $ 1,900/M</a></div>
            <div class="feat_text">
              <h6>Lorem Ipsum Dolor Sit Amit</h6>
              <p>123 ABC St</p>
              <a href="#" class="blue_btn pull-right">View Details </a>
              <ul class="list-inline">
                <li>Beds:4</li>
                <li>Baths:2 </li>
                <li>Sq Ft:2000</li>
              </ul>
              <h5>Appartment</h5>
              <div class="clearfix"></div>
              <hr>
              <div class="botom"> <a href="#" class="pull-left"><i class="fa fa-user" aria-hidden="true"></i>John Doe</a> <a href="#" class="pull-right">1 Week Ago</a> </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="feat_box"> <img src="{{asset('images/ft_2.jpg')}}" class="img-responsive" alt="">
            <div class="frosale"> <a href="#"> For Sale</a></div>
            <div class="price"> <a href="#"> $ 1,900/M</a></div>
            <div class="feat_text">
              <h6>Lorem Ipsum Dolor Sit Amit</h6>
              <p>123 ABC St</p>
              <a href="#" class="blue_btn pull-right">View Details </a>
              <ul class="list-inline">
                <li>Beds:4</li>
                <li>Baths:2 </li>
                <li>Sq Ft:2000</li>
              </ul>
              <h5>Appartment</h5>
              <div class="clearfix"></div>
              <hr>
              <div class="botom"> <a href="#" class="pull-left"><i class="fa fa-user" aria-hidden="true"></i>John Doe</a> <a href="#" class="pull-right">1 Week Ago</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <div class="pagination text-center">
              <ul class="list-inline">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
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