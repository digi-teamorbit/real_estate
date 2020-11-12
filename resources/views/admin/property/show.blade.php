@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Property #{{ $property->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/property') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $property->id }}</td>
                            </tr>
                            <tr><th> Location </th><td> {{ $property->location }} </td></tr><tr><th> Name </th><td> {{ $property->name }} </td></tr><tr><th> Address </th><td> {{ $property->address }} </td></tr><tr><th> Type </th><td> {{ $property->type }} </td></tr><tr><th> Price </th><td> {{ $property->price }} </td></tr><tr><th> Beds </th><td> {{ $property->beds }} </td></tr><tr><th> Baths </th><td> {{ $property->baths }} </td></tr><tr><th> Area </th><td> {{ $property->area }} </td></tr><tr><th> Description </th><td><?= html_entity_decode($property->description) ?></td></tr><tr><th> Image </th><td><img src="{{asset($property->image)}}" style="width:30%; "></td></tr>
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

%;