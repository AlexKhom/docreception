@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('content_header')


@stop

@section('content')
  <div class="container my-card">

    <!-- Left-aligned -->
    <div class="media">
      <div class="media-left">
        <img src="{{url($user->imagePath ? $user->imagePath : 'public/uploads/user-img/name.png')}}" class="media-object img-rounded" style="width:100px">
      </div>

      <div class="media-body">
        <h1 class="media-heading text-gray">{{$user->name}}</h1>
        <hr>
        <div class="form-group">
          <label for="email">Email</label>
          <pre>{{$user->email}}</pre>
        </div>

        <div class="form-group">

          <label for="email">Roles</label>

          <ul class="list-group" >
            @forelse ($user->roles as $role)
              <li class="list-group-item">{{$role->display_name}} ({{$role->description}})</li>
            @empty
              <p>This user has not been assigned any roles yet</p>
            @endforelse
          </ul>

        </div>
      </div>

      <div class="row">

        <div class="col-sm-4">
          <a href="{{route('users.index')}}" class="btn btn-info pull-left"><i class="glyphicon glyphicon-step-backward"></i>Back to User's list</a>
        </div>
        <div class="col-sm-8">
          <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-edit"></i> Edit User</a>
        </div>

      </div>
    </div>

</div>

@endsection
