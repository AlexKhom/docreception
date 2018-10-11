@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-gray">Create New User</h1>
@stop

@section('content')
    <div class="container my-card">


        @include('parts.error')


    {!! Form::model($user, ['route'=>['users.store'], 'method'=>'POST', 'files'=>'true']) !!}


            <div class="form-group {!! !empty($errors->first('name')) ? 'has-error' : '' !!}">
                {!! Form::label('name', 'User\'s name',['class'=>'text-default font-weight-bold']) !!}
                {!! Form::text('name', null, ['class'=>'form-control input-sm']) !!}
            </div>

            <div class="form-group {!! !empty($errors->first('email')) ? 'has-error' : '' !!}">
                {!! Form::label('email', 'Email',['class'=>'text-default font-weight-bold']) !!}
                {!! Form::email('email', null, ['class'=>'form-control input-sm']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('imagePath', 'User\'s Photo', ['class'=>'text-default font-weight-bold']) !!}
                {!! Form::file('imagePath',null , ['class'=>'form-control']) !!}
            </div>


            <div class="form-group {!! !empty($errors->first('password')) ? 'has-error' : '' !!}">
                {!! Form::label('password', 'Password',['class'=>'text-default font-weight-bold']) !!}
                {!! Form::password('password', ['class'=>'form-control input-sm']) !!}

            </div>


            <div class="form-group">
            {!! Form::label('roles', 'Choose Roles', ['class'=>'text-default font-weight-bold']) !!}
            {!! Form::select('roles[]', $roles, $user->roles->pluck('id'), ['class'=>'form-control' , 'multiple' => true]) !!}

             {{--Внимание! в select вторым параметром идет асс массив полученный методом pluck() см метод edit в Контроллере, Третьим параметром значение по умолчанию, здесь пустая строка --}}
            </div>
        <div class="row">
            <div class="col-sm-10 pull-left">
                <a href="{{route('users.index')}}" class="btn btn-info "><i class="glyphicon glyphicon-step-backward"></i>Back to User's list</a>
            </div>
            <div class="col-sm-2 pull-right">
            {!! Form::submit('Сохранить', ['class'=>'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
        </div>

@stop

@push('js')
    <script>
        (function($, undefined) {
            $('select').select2(); // на этой странице select только один если больше то инспектируем стр и обращ по id

        })(jQuery);
    </script>
@endpush
