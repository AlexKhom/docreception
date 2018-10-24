@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content_header')


@stop

@section('content')
    <div class="container my-card">

       <!-- Left-aligned -->
        <div class="media">
            <div class="media-left">
                <img src="{{url('public/images/admin-lte/icons8-admin-settings-male-50.png')}}" class="media-object" style="width:50px;">
            </div>

            <div class="media-body">
                <h1 class="media-heading text-gray">{{$stuff->display_name}}<small class="m-l-25"><em>({{$stuff->name}})</em></small></h1>
                <hr>
                <div class="form-group">
                    <p class="text-gray">Description for this stuff: <pre>{{$stuff->description}}</pre></p>
                </div>


            </div>

            <div class="row">

                <div class="col-sm-4">
                    <a href="{{route('stuffs.index')}}" class="btn btn-info pull-left"><i class="glyphicon glyphicon-step-backward"></i>Back to Stuff's list</a>
                </div>
                <div class="col-sm-8">
                    <a href="{{route('stuffs.create', $stuff->id)}}" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-edit"></i> Edit Stuff</a>
                </div>

            </div>
        </div>

    </div>

@endsection
