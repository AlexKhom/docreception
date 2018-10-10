@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Users list</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="col-lg-3">
                <a href="{{route('users.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Create New User</a>
            </div>
        </div>
        <hr class="mt-0">

    <div class="box-body">
                <table class="table table-condensed table-hover data-table" role="grid">
                    <thead class="">
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
                            <td class=""><a class="btn btn-info btn-md" href="{{route('users.show', $user->id)}}">View</a>  <a class="btn btn-warning btn-md" href="{{route('users.edit', $user->id)}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

    </div>
        <div class="center-block">
            {{$users->links()}}
        </div>
    </div>
@stop