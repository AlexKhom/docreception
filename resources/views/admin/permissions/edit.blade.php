@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-gray">Edit Permission</h1>
@stop

@section('content')
    <div class="container my-card">

        @include('parts.error')

        <h2>Permission Details:</h2>

        {!! Form::model($permission, ['route'=>['permissions.update', $permission->id], 'method'=>'PUT']) !!}

        <div class="form-group {!! !empty($errors->first('display_name')) ? 'has-error' : '' !!}">
            {!! Form::label('display_name', 'Name (Human Readable)',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('display_name', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('name')) ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Slug (Can not be changed)',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('name', null, ['class'=>'form-control input-sm', 'disabled']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('description')) ? 'has-error' : '' !!}">
            {!! Form::label('description', 'Description',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('description', null ,['class'=>'form-control input-sm']) !!}
        </div>

        <div class="row">
            <div class="col-sm-10 pull-left">
                <a href="{{route('permissions.index')}}" class="btn btn-info "><i class="glyphicon glyphicon-step-backward"></i>Back to Permission's list</a>
            </div>
            <div class="col-sm-2 pull-right text-right">
                {!! Form::submit('Save changes', ['class'=>'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop