@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-gray">Create New Service</h1>
@stop

@section('content')
    <div class="container my-card">


        @include('parts.error')

        <h2>Service Details:</h2>

        @if( !empty($service->name)) {{--if this field not empty - we will Edit --}}

        {!! Form::model($service, ['route'=>['services.update',$service->id], 'method'=>'PUT']) !!}

        @else {{-- and if field is empty we will Create new Client --}}

        {!! Form::model($service, ['route'=>['services.store'], 'method'=>'POST']) !!}

        @endif

        <div class="form-group {!! !empty($errors->first('display_name')) ? 'has-error' : '' !!}">
            {!! Form::label('display_name', 'Name (Human Readable)',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('display_name', null, ['class'=>'form-control input-sm']) !!}
        </div>


        @if( !empty($service->name))
            <div class="form-group {!! !empty($errors->first('name')) ? 'has-error' : '' !!}">
                {!! Form::label('name', 'Slug (Can not be changed)',['class'=>'text-default font-weight-bold']) !!}
                {!! Form::text('name', null, ['class'=>'form-control input-sm', 'disabled']) !!}
            </div>
        @else
            <div class="form-group {!! !empty($errors->first('name')) ? 'has-error' : '' !!}">
                {!! Form::label('name', 'Slug (Can not be changed)',['class'=>'text-default font-weight-bold']) !!}
                {!! Form::text('name', null, ['class'=>'form-control input-sm']) !!}
            </div>
        @endif


        <div class="form-group {!! !empty($errors->first('description')) ? 'has-error' : '' !!}">
            {!! Form::label('description', 'Description',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('description', null ,['class'=>'form-control input-sm']) !!}

        </div>

        <div class="row">
            <div class="col-sm-10 pull-left">
                <a href="{{route('services.index')}}" class="btn btn-info "><i
                            class="glyphicon glyphicon-step-backward"></i>Back to Services list</a>
            </div>
            <div class="col-sm-2 pull-right">
                {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop
