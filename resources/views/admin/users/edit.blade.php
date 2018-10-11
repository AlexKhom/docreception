@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
    <div class="container my-card">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-gray">Edit User: {{$user->name}}</h1>
            </div>
            @include('parts.error')
        </div>
        <hr>

        {!! Form::model($user, ['route'=>['users.update', $user->id], 'method'=>'PUT', 'files'=>'true']) !!}

        <div class="form-group {!! !empty($errors->first('name')) ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Имя пользователя',['class'=>'text-primary font-weight-bold']) !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('email')) ? 'has-error' : '' !!}">
            {!! Form::label('email', 'Email',['class'=>'text-primary font-weight-bold']) !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('password')) ? 'has-error' : '' !!}">
            {!! Form::label('password', 'Password',['class'=>'text-primary font-weight-bold']) !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('roles', 'Roles') !!}
            {!! Form::select('roles[]', $roles, $user->roles->pluck('id'), ['class'=>'form-control' , 'multiple' => true]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('imagePath', 'User\'s Photo', ['class'=>'text-primary font-weight-bold']) !!}
            {!! Form::file('imagePath',null , ['class'=>'form-control', 'value'=>$user->imagePath ? $user->imagePath : '']) !!}
        </div>

        <div class="form-group">
            <div id="holder"> <img  style="margin-top:15px;max-height:100px;" src="{{$user->imagePath}}"> </div>
        </div>
<div class="row">
    <div class="col-sm-4">
        <a href="{{route('users.index')}}" class="btn btn-info pull-left"><i class="glyphicon glyphicon-step-backward"></i>Back to User's list</a>
    </div>
    <div class="col-sm-8">
        {!! Form::submit('Update', ['class'=>'btn btn-success pull-right']) !!}
    </div>
</div>


        {!! Form::close() !!}


    </div>>
@stop


@push('js')
    <script>
        $('select').select2(); // на этой странице select только один если больше то инспектируем стр и обращ по id
    </script>
@endpush
