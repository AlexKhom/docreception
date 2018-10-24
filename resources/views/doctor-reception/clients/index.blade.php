@extends('layouts.reception')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 pull-left">
                <h1 class="text-gray">Список Пациентов</h1>
            </div>
            <div class="col-sm-3 pull-right mt-2">
                <a href="{{route('clients.create')}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i>Зарегистрировать нового пациента</a>
            </div>
        </div>
        <p>Type something in the input field to search the table for first names, last names or emails:</p>
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <hr>

    <div class="row">
                <table class="table table-hover" >
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

                    <tbody id="clientsTable">
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{$client->lastName}}</td>
                            <td>{{$client->firstName}}</td>
                            <td>{{$client->secondName}}</td>
                            <td>{{$client->birthYear}}</td>
                            <td>{{$client->created_at->toFormattedDateString()}}</td>
                            <td>
                                <div class="d-flex">
                                    <div class="mr-1"><a  class="btn btn-info" href="{{route('clients.show', $client->id)}}"><i class="glyphicon glyphicon-eye-open"></i> View</a></div>
                                   <div class="mr-1"> <a  class="btn btn-warning" href="{{route('clients.edit', $client->id)}}"><i class="glyphicon glyphicon-edit"></i> Edit</a></div>
                                    @role('superadministrator')
                                    <div class="mr-1">{!! Form::model($client, ['route'=>['clients.destroy',$client->id], 'method'=>'DELETE']) !!}
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}</div>
                                    @endrole
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

    </div>
        <div class="text-center">
            {{$clients->links()}}
        </div>
    </div>
@stop
@push('js')
    <script>
            $(document).ready(function(){
                $('#clientsTable').on('keyup', function() {
                    let value = $(this).val().toLowerCase();
                    $('#clientsTable tr').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
                $('#clientsTable').on('click', function () {
                    alert('dd');
                })
            });
      </script>
@endpush