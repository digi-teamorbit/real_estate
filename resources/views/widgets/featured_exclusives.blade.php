<?php 

$cms_home2=DB::table('pages')->where('id', 8)->first();

?>

<!-- featured sec -->

<section class="our_featured" style="
    background: url({{asset($cms_home2->image)}});
    background-position: top center;
    background-size: cover;
    background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
        <div class="main_heading text-center">
          <h3>{{$cms_home2->name}}</h3>
          <?= html_entity_decode($cms_home2->content) ?>
        </div>
      </div>
    </div>
    <div class="textimonial">
      <div>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="feat_box wow zoomIn" data-wow-duration="2s" > <img src="{{asset('images/ft_1.jpg')}}" class="img-responsive" alt="">
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
            <div class="feat_box wow zoomIn" data-wow-duration="2s"> <img src="{{asset('images/ft_2.jpg')}}" class="img-responsive" alt="">
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
      </div>
      <div>
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
      </div>
      <div>
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
      </div>
    </div>
  </div>
</section>