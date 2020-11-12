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

<section class="form_div">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
        <div class="main_heading">
           <h3><img src="{{asset($cms_tenant->image)}}"  class="img-responsive" alt="">{{$cms_tenant->name}}</h3>
        </div> 
        <div class="link_list text-center ">
           <ul class="list-inline">
             <li><a href="{{route('tenant_1')}}">PAY MY RENT </a></li>
             <li><a href="{{route('tenant_2')}}">CONTACT LANDLORD </a></li>
             <li><a href="{{route('tenant_3')}}"  class="active">MAINTENANCE REQUEST </a></li>
             <li><a href="{{route('tenant_4')}}">SUBMIT DOCUMENTS </a></li>
           </ul>
        </div> 
      </div>
 
      <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <div class="form_main">
          <h4>SUBMIT DOCUMENTS</h4>
           <form>
             <input type="text" placeholder="Name">
             <input type="text" placeholder="Contact Number">
             <input type="text" placeholder="Email">
             <input type="text" placeholder="Address">
             <input type="text" placeholder="Payment Option">
             <input type="text" placeholder="Amount">
             <label> Upload Document</label>
             <input type="submit" value="UPLOAD DOCUMENT">
             <input type="submit" value="UPLOAD MORE DOCUMENT">
             <input type="submit" value="submit Now">
           </form>
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