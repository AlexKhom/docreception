@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <div class="container my-card">
        <div class="row">
            <div class="col-sm-9 pull-left">
                <h1 class="text-gray">Manage Users</h1>
            </div>
            <div class="col-sm-3 pull-right">
                <a href="{{route('users.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Create New User</a>
            </div>
        </div>
        <hr>

    <div class="row">
                <table class="table table-hover">
                    <thead class="text-gray">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->toFormattedDateString()}}</td>
                            <td>
                                <div class="btn-group-md text-center">
                                    <a  class="btn btn-info" href="{{route('users.show', $user->id)}}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a  class="btn btn-warning" href="{{route('users.edit', $user->id)}}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

    </div>
        <div class="text-center">
            {{$users->links()}}
        </div>
    </div>
@stop