@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Page #{{ $page->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/page') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $page->id }}</td>
                            </tr>
                            <tr><th> Page Name </th><td> {{ $page->page_name }} </td></tr><tr><th> Name </th><td> {{ $page->name }} </td></tr><tr><th> Content </th><td><?= html_entity_decode($page->content) ?></td></tr><tr><th> Image </th><td><img src="{{asset($page->image)}}" style="width: 30%;"></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

