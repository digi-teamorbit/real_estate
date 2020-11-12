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

<section class="main_calender">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <div class="icalendar">
         <div class="icalendar__month">
                <div class="icalendar__prev" onclick="moveDate('prev')">
                    <span>&#10094</span>
                </div>
                <div class="icalendar__current-date">
                    <h2 id="icalendarMonth"></h2>
                    <div>
                        <div id="icalendarDateStr"></div>
                    </div>

                </div>
                <div class="icalendar__next" onclick="moveDate('next')">
                    <span>&#10095</span>
                </div>
            </div>
            <div class="icalendar__week-days">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="icalendar__days"></div>
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

<link rel="stylesheet" type="text/css" href="{{asset('css/javascript-calendar.css')}}">
@endsection

@section('js')
<script type="text/javascript"></script>
<script src="{{asset('js/javascript-calendar.js')}}"></script>
@endsection