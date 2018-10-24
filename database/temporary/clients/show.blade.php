@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
  <div class="container">

    <!-- Left-aligned -->
    <div class="media">
      <div class="media-left">
        <img src="{{url($client->imagePath ? $client->imagePath : 'public/uploads/user-img/name.png')}}" class="media-object img-rounded" style="width:100px">
      </div>

      <div class="media-body">
        <h1 class="media-heading text-gray">{{$client->firstName}} {{$client->secondName}} {{$client->lastName}}</h1>
        <hr>

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

      </div>

      <div class="row">

        <div class="col-sm-4">
          <a href="{{route('del-client.index')}}" class="btn btn-info pull-left"><i class="glyphicon glyphicon-step-backward"></i>Назад к поиску</a>
        </div>
        <div class="col-sm-8">

          <a  class="btn btn-warning" href="{{route('del-client.destroy', $client->id)}}"><i class="glyphicon glyphicon-trash"></i>Удалить запись из БД</a>

        </div>

      </div>
    </div>

</div>

@endsection

@push('js')
  <script>
      (function($, undefined) {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          $('#products-table').on('click', '.glyphicon-trash' , function(){
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
