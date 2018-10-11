@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content_header')


@stop

@section('content')
    <div class="container my-card">

       <!-- Left-aligned -->
        <div class="media">
            <div class="media-left">
                <img src="{{url('public/images/admin-lte/icons8-admin-settings-male-50.png')}}" class="media-object" style="width:50px">
            </div>

            <div class="media-body">
                <h1 class="media-heading text-gray">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
                <hr>
                <div class="form-group">
                    <p class="text-gray">Description for this role: <pre>{{$role->description}}</pre></p>
                </div>

                <div class="form-group">

                    <h2>Permissions:</h2>

                    <ul class="list-group" >
                        @forelse ($role->permissions as $permission)
                            <li class="list-group-item">{{$permission->display_name}} <em class="m-l-15">({{$permission->description}})</em></li>
                        @empty
                            <p>This role has not any permission yet</p>
                        @endforelse
                    </ul>

                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <a href="{{route('roles.index')}}" class="btn btn-info pull-left"><i class="glyphicon glyphicon-step-backward"></i>Back to Role's list</a>
                </div>
                <div class="col-sm-8">
                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-edit"></i> Edit Role</a>
                </div>

            </div>
        </div>

    </div>

@endsection
