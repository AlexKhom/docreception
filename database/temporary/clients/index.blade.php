@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <div class="container">
        {{--@include('parts.error')--}}
        <div class="row">
            <div class="col-sm-9 pull-left">
                <h1 class="text-gray">Поиск и Удаление Пациентов</h1>
            </div>
            <div class="col-sm-10 pull-left">

                {!! Form::model($allClients, ['route'=>['del-client.data'], 'method'=>'POST']) !!}
                <div class="form-group {!! !empty($errors->first('lastName')) ? 'has-error' : '' !!}">
                    {!! Form::label('lastName', 'Поиск по Фамилии',['class'=>'text-default font-weight-bold']) !!}
                    {!! Form::text('lastName', null, ['class'=>'form-control input-sm', 'placeholder'=>'Введите фамилию']) !!}
                </div>
                <div class="col-sm-2 pull-right">
                    {!! Form::submit('Поиск', ['class'=>'btn btn-success']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <hr>
@if( !empty($clients))
    <div class="row">
                <table class="table table-hover" id="products-table">
                    <thead class="text-gray">
                    <tr>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчетсво</th>
                        <th>Год рождения</th>
                        <th>Date Created</th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{$client->lastName}}</td>
                            <td>{{$client->firstName}}</td>
                            <td>{{$client->secondName}}</td>
                            <td>{{$client->birthYear}}</td>
                            <td>{{$client->created_at->toFormattedDateString()}}</td>
                            <td>
                                <div class="btn-group-md text-center">
                                    <a  class="btn btn-info" href="{{route('del-client.show', $client->id)}}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a  data-id="{{$client->id}}" class="btn btn-warning delClient" href="{{route('del-client.destroy', $client->id)}}"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

    </div>
        <div class="text-center">
            {{--{{$clients->links()}}--}}
        </div>

        @endif
    </div>

@stop
@push('js')
    <script>
(function($, undefined) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#products-table').on('click', '.delClient' , function(){
        var id = $(this).attr('data-id');
        $.ajax({
            url: '/admin/del-client/'+id,
            type: 'DELETE',
            success: function(){
                console.log('ok del complete')
            }
        });
    })



})(jQuery);

    </script>
@endpush