@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-gray">Create New Role</h1>
@stop

@section('content')
    <div class="container my-card">


        @include('parts.error')

        <h2>Role Details:</h2>

        {!! Form::model($role, ['route'=>['roles.store'], 'method'=>'POST']) !!}


        <div class="form-group {!! !empty($errors->first('display_name')) ? 'has-error' : '' !!}">
            {!! Form::label('display_name', 'Name (Human Readable)',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('display_name', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('name')) ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Slug (Can not be changed)',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('name', null, ['class'=>'form-control input-sm']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('description')) ? 'has-error' : '' !!}">
            {!! Form::label('description', 'Description',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('description', null ,['class'=>'form-control input-sm']) !!}

        </div>

        {{--##########--}}

            {{--<b-checkbox-group>--}}
                {{--@foreach ($permissions as $permission)--}}
                    {{--<div class="field">--}}
                        {{--<b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                {{--###############--}}


        <div class="form-group">
            {!! Form::label('permissions', 'Choose Permissions', ['class'=>'text-default font-weight-bold']) !!}
            {!! Form::select('permissions[]', $permissions, $role->permissions->pluck('id'), ['class'=>'form-control' , 'multiple' => true]) !!}

            {{--Внимание! в select вторым параметром идет асс массив полученный методом pluck() см метод edit в Контроллере, Третьим параметром значение по умолчанию, здесь пустая строка --}}
        </div>
        <div class="row">
            <div class="col-sm-10 pull-left">
                <a href="{{route('roles.index')}}" class="btn btn-info "><i class="glyphicon glyphicon-step-backward"></i>Back to Role's list</a>
            </div>
            <div class="col-sm-2 pull-right">
                {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
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
