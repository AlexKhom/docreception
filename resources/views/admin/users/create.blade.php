@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create New User</h1>
@stop

@section('content')
    <hr>
    <div class="container">

        <form action="{{route('users.store')}}" method="POST">
            {{csrf_field()}}
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <label for="name" class="label">Name</label>
                        <input type="text" class="input" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="email" class="label">Email:</label>
                        <input type="email" class="input" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <label for="password" class="label">Password</label>
                        <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">

                            <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>

                    </div>
                </div> <!-- end of .column -->

                <div class="col-4">
                    <label for="roles" class="label">Roles:</label>
                    <input type="hidden" name="roles" :value="rolesSelected" />

                    @foreach ($roles as $role)
                        <div class="field">
                            <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                        </div>
                    @endforeach
                </div>
            </div> <!-- end of .columns for forms -->
            <div class="row">
                <div class="col">
                    <hr />
                    <button class="btn btn-primary">Create New User</button>
                </div>
            </div>
        </form>
    </div> <!-- end of -container -->

@stop

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true,
                rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
            }
        });
    </script>
@endsection