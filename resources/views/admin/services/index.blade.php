@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 <h1>I'm here!</h1>
@stop

@section('content')
    <div class="container-fluid my-card">
        <div class="row">
            <div class="col-sm-9 pull-left">
                <h1 class="text-gray">Manage Services</h1>
            </div>
            <div class="col-sm-3 pull-right">
                <a href="{{route('services.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i> Create New Service</a>
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
                @foreach ($services as $service)
                    <tr>
                        <th>{{$service->display_name}}</th>
                        <td>{{$service->name}}</td>
                        <td>{{$service->description}}</td>

                        <td>
                            <div class="btn-group-md text-center">
                                <a  class="btn btn-info" href="{{route('services.show', $service->id)}}"><i class="glyphicon glyphicon-eye-open"></i> Details</a>
                                <a  class="btn btn-warning" href="{{route('services.edit', $service->id)}}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@stop