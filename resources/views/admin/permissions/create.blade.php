@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="text-gray">Create New Permission</h1>
@stop

@section('content')
    <div class="container my-card">


        @include('parts.error')

        <h2>Permission Details:</h2>

        {!! Form::model($permission, ['route'=>['permissions.store'], 'method'=>'POST']) !!}

        <div class="form-group " >
            <feildset> <legend style="color: whitesmoke">Choose the group of permission</legend>
            <p>{!! Form::radio('permission_type', 'basic', true); !!} <span style="color: whitesmoke; font-size: large">Basic Permission</span></p>
            <p>{!! Form::radio('permission_type', 'crud'); !!} <span style="color: whitesmoke; font-size: large">CRUD Permission</span></p></feildset>
        </div>
        <!-- start of basic form-input  -->
        <div class="row " id="basicForm">
        <div class="form-group {!! !empty($errors->first('display_name')) ? 'has-error' : '' !!}">
            {!! Form::label('display_name', 'Name (Human Readable)',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('display_name', null, ['class'=>'form-control input-sm', 'data-basic'=>'basic']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('name')) ? 'has-error' : '' !!}">
            {!! Form::label('name', 'Slug (Can not be changed)',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('name', null, ['class'=>'form-control input-sm', 'data-basic'=>'basic']) !!}
        </div>

        <div class="form-group {!! !empty($errors->first('description')) ? 'has-error' : '' !!}">
            {!! Form::label('description', 'Description',['class'=>'text-default font-weight-bold']) !!}
            {!! Form::text('description', null ,['class'=>'form-control input-sm' , 'data-basic'=>'basic', 'placeholder'=> 'Describe what this permission does']) !!}
        </div>
        </div>
        <!-- end of basic form-input  -->

        <div   id="crud_Form">
            <div class="row">
                <div class="form-group col-sm-4 {!! !empty($errors->first('resource')) ? 'has-error' : '' !!}">
                    {!! Form::label('resource', 'Resource',['class'=>'text-default font-weight-bold']) !!}
                    {!! Form::text('resource', null ,['class'=>'form-control input-sm' , 'data-basic'=>'basic','id'=>'resource','placeholder' => 'The name of the resource']) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 pull-left" id="typeOfPermission">
                    <div class="form-group">
                        <fieldset>
                            <legend>C.R.U.D.</legend>
                            <p>{!! Form::checkbox('crud_selected[]', 'create') !!} <span>Create</span></p>
                            <p>{!! Form::checkbox('crud_selected[]', 'read') !!} <span>Read</span></p>
                            <p>{!! Form::checkbox('crud_selected[]', 'update') !!} <span>Update</span></p>
                            <p>{!! Form::checkbox('crud_selected[]', 'delete') !!} <span>Delete</span></p>
                        </fieldset>
                    </div>
                </div>
                <!-- end of checkbox field  -->
                <div class="col-sm-8 pull-right">
                    <table class="table table-bordered table-hover" >
                        <thead>
                        <th style="min-width: 20%;">Name</th>
                        <th style="min-width: 20%;">Slug</th>
                        <th style="min-width: 60%;">Description</th>
                        </thead>
                        <tbody>



                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- end of crud row  -->
        <div class="row">
            <div class="col-sm-11 pull-left">
                <a href="{{route('permissions.index')}}" class="btn btn-info "><i class="glyphicon glyphicon-step-backward"></i>Back to Permission's list</a>
            </div>
            <div class="col-sm-1 pull-right text-right">
                {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop

@push('js')
    <script>
        (function($, undefined) {
            $( "#crud_Form").hide();
            $( "form input:radio" ).change(function () {
                $( "#basicForm").toggle(400);

            }).change(function () {
                $( "#crud_Form").toggle(400);
            });

            $( "#crud_Form input[type=checkbox]" )
                .change(function () {
                        $( "table tr" ).not( ":first" ).remove(); // удалим все сроки таблицы
                        let checked = $('#typeOfPermission input:checked');

                        let arrayTypeOfPermission = checked.map(function() {
                            let value = this.value; // получим значение
                            let str = value.substr(0,1).toUpperCase() + value.substr(1); // передалаем строку
                            let resource = $( "input[name=resource]").val();
                            let resourceStr = resource.substr(0,1).toUpperCase() + resource.substr(1);
                            let slug = str.toLowerCase() + "-" + resource.toLowerCase();
                            let description = "Allow a User to " + str.toUpperCase() + " a " + resource.substr(0,1).toUpperCase() + resource.substr(1);
                            $( "tbody").append("<tr><td>"+str+' '+resourceStr+"</td><td>"+slug+"</td><td>"+description+"</td></tr>");
                            return str+' '+resourceStr +'slug: '+slug+'descr.: '+description; //вернем строку в
                        }).toArray(); // массив для проверки данных
                        //console.log(arrayTypeOfPermission);

            });


        })(jQuery);
    </script>
@endpush
