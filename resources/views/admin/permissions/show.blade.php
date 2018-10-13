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
                <h1 class="media-heading text-gray">Permission: {{$permission->display_name}}<small class="m-l-25"> <em>({{$permission->name}})</em></small></h1>
                <hr>
                <div class="form-group">
                    <p class="text-gray">Description for this permission: <pre>{{$permission->description}}</pre></p>
                </div>


            </div>

            <div class="row">

                <div class="col-sm-4">
                    <a href="{{route('permissions.index')}}" class="btn btn-info pull-left"><i class="glyphicon glyphicon-step-backward"></i>Back to Permission's list</a>
                </div>
                <div class="col-sm-8">
                    <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-edit"></i> Edit Permission</a>
                </div>

            </div>
        </div>

    </div>

@endsection
