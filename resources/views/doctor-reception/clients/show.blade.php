@extends('layouts.reception')
@section('sidebar')
@stop

@section('content')
  <div class="container">

    <!-- Left-aligned -->
    <div class="media">

        <img src="{{url($client->imagePath ? $client->imagePath : 'public/uploads/user-img/name.png')}}" class="mr-3 mt-3" style="width:100px">


      <div class="media-body">
        <h1 class="media-heading text-gray">{{$client->firstName}} {{$client->secondName}} {{$client->lastName}}</h1>
        <hr>
          <div class="col-sm-3 pull-right mt-2">
              <a href="{{route('profiles.create')}}" class="btn btn-secondary"><i class="glyphicon glyphicon-user"></i>Создать Карточку</a>
              <a href="{{route('profiles.show',$client->profile->id)}}" class="btn btn-success"><i class="glyphicon glyphicon-user"></i>Карточка Пациента</a>
          </div>

        <div class="form-group">
          <label for="birthYear">Год Рождения</label>
          <pre>{{$client->birthYear}}</pre>
        </div>

        <div class="form-group">
          <label for="phone">Основной телефон</label>
          <pre>{{$client->phone}}</pre>
        </div>

        <div class="form-group">
          <label for="secondPhone">Дополнительный телефон</label>
          <pre>{{$client->secondPhone ? $client->secondPhone : 'Нет'}}</pre>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <pre>{{$client->email}}</pre>
        </div>

        <div class="form-group">
          <label for="messenger">Наличие мессенджера Viber</label>
          <pre>{{$client->messenger ? 'Есть' : 'Нет'}}</pre>
        </div>
        <hr>
        <div class="d-flex ">
          <div class="mr-auto">
            <a href="{{route('clients.index')}}" class="btn btn-info pull-left"><i class="glyphicon glyphicon-step-backward"></i>Назад к списку клиентов</a>
          </div>
          <div class="mr-auto">
            <a href="{{route('clients.edit', $client->id)}}" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-edit"></i>Редактировать данные клиента</a>
          </div>
          <div class="mr-auto">
            {!! Form::model($client, ['route'=>['clients.destroy',$client->id], 'method'=>'DELETE']) !!}
            {!! Form::submit('Удалить', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

