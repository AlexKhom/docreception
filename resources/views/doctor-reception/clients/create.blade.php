@extends('layouts.reception')

@section('sidebar')

@stop

@section('content')
    <div class="container">
        @include('parts.error')

        @if( !empty($client->name)) {{--if this field not empty - we will Edit --}}

        {{-- Opening Form for Edit --}}

        {!! Form::model($client, ['route'=>['clients.update', $client->id], 'method'=>'PUT' , 'files'=>'true']) !!}

        @else {{-- and if field is empty we will Create new Client --}}

        {{-- Opening Form for Create--}}

        {!! Form::model($client, ['route'=>['clients.store'], 'method'=>'POST', 'files'=>'true']) !!}

        @endif


        <div class="form-group {!! !empty($errors->first('firstName')) ? 'has-error' : '' !!}">
            {!! Form::label('firstName', 'Имя',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('firstName', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('secondName')) ? 'has-error' : '' !!}">
            {!! Form::label('secondName', 'Отчество',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('secondName', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('lastName')) ? 'has-error' : '' !!}">
            {!! Form::label('lastName', 'Фамилия',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('lastName', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('birthYear')) ? 'has-error' : '' !!}">
            {!! Form::label('birthYear', 'Год Рождения',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::date('birthYear', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('phone')) ? 'has-error' : '' !!}">
            {!! Form::label('phone', 'Основной телефон',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::tel('phone', null, ['class'=>'form-control input-sm','placeholder'=>'067-614-00-00', 'pattern' => '[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('secondPhone')) ? 'has-error' : '' !!}">
            {!! Form::label('secondPhone', 'Дополнительный телефон',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::tel('secondPhone', null, ['class'=>'form-control input-sm','placeholder'=>'067-614-00-00', 'pattern' => '[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('email')) ? 'has-error' : '' !!}">
            {!! Form::label('email', 'Email',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::email('email', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('imagePath', 'User\'s Photo', ['class'=>'text-default font-weight-bold']) !!}
            {!! Form::file('imagePath',null , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('messenger')) ? 'has-error' : '' !!}">
            {!! Form::label('messenger', 'Viber?',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::checkbox('messenger', null, true) !!}
        </div>

        <div class="row">
            <div class="col-sm-10 pull-left">
                <a href="{{route('clients.index')}}" class="btn btn-info "><i
                            class="glyphicon glyphicon-step-backward"></i>Назад к списку клиентов</a>
            </div>
            <div class="col-sm-2 pull-right">
                {!! Form::submit('Сохранить нового клиента', ['class'=>'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop

@push('js')
    <script>
        (function ($, undefined) {
            //$('select').select2(); // на этой странице select только один если больше то инспектируем стр и обращ по id

        })(jQuery);
    </script>
@endpush
