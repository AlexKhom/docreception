@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 <h1>I'm here!</h1>
@stop

@section('content')
    <div class="container-fluid my-card">
        <div class="row">
            <div class="col-sm-9 pull-left">
                <h1 class="text-gray">Manage Stuffs</h1>
            </div>
            <div class="col-sm-3 pull-right">
                <a href="{{route('stuffs.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Create New Stuff</a>
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
                @foreach ($stuffs as $stuff)
                    <tr>
                        <th>{{$stuff->display_name}}</th>
                        <td>{{$stuff->name}}</td>
                        <td>{{$stuff->description}}</td>

                        <td>
                            <div class="btn-group-md text-center">
                                <a  class="btn btn-info" href="{{route('stuffs.show', $stuff->id)}}"><i class="glyphicon glyphicon-eye-open"></i> Details</a>
                                <a  class="btn btn-warning" href="{{route('stuffs.edit', $stuff->id)}}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@stop