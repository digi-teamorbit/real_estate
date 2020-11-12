@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<!-- banner start -->
 
<section class="inner_banner pp" style="
    background: url({{asset($inner_banner->image)}});  background-repeat: no-repeat;">
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

<section class="term_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h3>{{$cms_terms->name}}</h3>
        <?= html_entity_decode($cms_terms->content) ?>
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