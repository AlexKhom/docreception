@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <div class="container-fluid my-card">
        <div class="row">
            <div class="col-sm-9 pull-left">
                <h1 class="text-gray">Manage Permissions</h1>
            </div>
            <div class="col-sm-3 pull-right">
                <a href="{{route('permissions.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Create New Permission</a>
            </div>
        </div>
        <hr>

        <div class="row">
            <table class="table table-hover">
                <thead class="text-gray">
                <tr>
                    <th>Display name</th>
                    <th>Name</th>
                    <th>Description</th>

                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <th>{{$permission->display_name}}</th>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->description}}</td>

                        <td>
                            <div class="btn-group-md text-center">
                                <a  class="btn btn-info" href="{{route('permissions.show', $permission->id)}}"><i class="glyphicon glyphicon-eye-open"></i> Details</a>
                                <a  class="btn btn-warning" href="{{route('permissions.edit', $permission->id)}}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="text-center">
            {{$permissions->links()}}
        </div>
    </div>
@stop