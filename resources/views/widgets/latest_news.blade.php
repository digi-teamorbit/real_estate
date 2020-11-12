<?php

$latest_news=DB::table('blogs')->get();

?>


<!-- lettest news sec  -->
<section class="mews_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="main_heading text-center">
          <h3>Latest News</h3>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($latest_news as $news)
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="news_div wow zoomIn" data-wow-duration="2s"> <img src="{{asset($news->image)}}" class="img-responsive" alt="">
          <div class="news_text">
            <h3>{{$news->name}} </h3>
            <h6>Date: {{date_format(date_create($news->updated_at),"d F Y")}}</h6>
            <a href="javascript:void(0)" class="pull-right"> <img src="{{asset('images/com.png')}}" class="img-responsive" alt=""> 0 COMMENT</a>
            <div class="clearfix"></div>
            <?= html_entity_decode($news->short_detail) ?>
          </div>
        </div>
      </div>
      @endforeach
      <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="news_div wow zoomIn" data-wow-duration="2s"> <img src="{{asset('images/lt_2.jpg')}}" class="img-responsive" alt="">
          <div class="news_text">
            <h3>Lorem ipsum dolor </h3>
            <h6>Date: 10th June 2020</h6>
            <a href="#" class="pull-right"> <img src="{{asset('images/com.png')}}" class="img-responsive" alt=""> 0 COMMENT</a>
            <div class="clearfix"></div>
            <p>Lorem ipsum dolor sit amet, cum ex nihil oratio deterruisset. An quaestio interpretaris vis. Id suas populo mollis eam, duo autem senserit definitionem ut. Ne lorem bonorum eam.</p>
          </div>
        </div>
      </div> -->
      <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <div class="news_div wow zoomIn" data-wow-duration="2s"> <img src="{{asset('images/lt_3.jpg')}}" class="img-responsive" alt="">
          <div class="news_text">
            <h3>Lorem ipsum dolor </h3>
            <h6>Date: 10th June 2020</h6>
            <a href="#" class="pull-right"> <img src="{{asset('images/com.png')}}" class="img-responsive" alt=""> 0 COMMENT</a>
            <div class="clearfix"></div>
            <p>Lorem ipsum dolor sit amet, cum ex nihil oratio deterruisset. An quaestio interpretaris vis. Id suas populo mollis eam, duo autem senserit definitionem ut. Ne lorem bonorum eam.</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>