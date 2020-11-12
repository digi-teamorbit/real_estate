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

<section class="privacy_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="main_heading text-center">
           <h2>{{$cms_privacy1->name}}</h2>
            <?= html_entity_decode($cms_privacy1->content) ?>
        </div>  
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @foreach($privacy_policies as $policy)
        <div class="privacy_main">
           <h3>{{$policy->title}}</h3>
           <?= html_entity_decode($policy->description) ?>
        </div>  
        @endforeach
        <!-- <div class="privacy_main">
           <h3>2. The standard Lorem Ipsum passage</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> -->  
        <!-- <div class="privacy_main">
           <h3>3. The standard Lorem Ipsum passage</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> -->  
        <!-- <div class="privacy_main">
           <h3>4. The standard Lorem Ipsum passage</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> -->  
        <!-- <div class="privacy_main">
           <h3>4. The standard Lorem Ipsum passage</h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div> -->  
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