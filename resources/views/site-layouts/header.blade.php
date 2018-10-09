<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alexandr Khomenko">
    <link rel="icon" href="public/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<title>Клиника ортопедии</title>--}}
    <title>@yield('title')</title>


    <!-- Bootstrap core CSS -->
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster|Noto+Sans|Noto+Serif:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <!-- Custom styles for this template -->

    @yield('style')
    {{--<link rel="stylesheet" href="resources/assets/css/carousel.css" >--}}
    {{--<link rel="stylesheet" type="text/css" href="../../../public/css/main.css">--}}

</head>
<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="img-fluid" src="{{url('public/images/main/homepage/logo.png')}}" width="35" height="35"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">


            <ul class=" navbar-nav   mr-auto lobsterFont"><li>Клиника эстетичеcкой ортопедии,<br> артрологии и спортивной травмы</li></ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Главная<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/specialists')}}">Специалисты</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/services/artroscopia')}}">Артроскопия суставов</a>
                    <a class="dropdown-item" href="{{url('/services/endoprosthetics')}}">Эндопротезирование суставов</a>
                    <a class="dropdown-item" href="{{url('/services/aesthetic')}}">Эстетическая ортопедия</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('/services/non-invasive')}}">Безоперационные методы лечения травм</a>
                    <a class="dropdown-item" href="{{url('/services/rehabilitation')}}">Реабилитационные программы</a>
                </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/news')}}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/video')}}">Видео</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/gallery')}}">Фотогалерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/comments')}}">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contacts')}}">Контакты</a>
                </li>
            </ul>


            <a href="tel:380676147048" id="callUs" class="btn btn-outline-primary">Консультации:</strong><br>+38 (050) 000-00-00</a>
            <div class="appointment text-center m-1 p-2"><a href="#">Записаться<br> на консультацию</a></div>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
{{--****************--}}
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}

    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>@yield('title')</title>--}}
    {{--<link rel="shortcut icon" href="{{url('images/favicon.png')}}" type="image/png">--}}
    {{--<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
    {{--@yield('style')--}}
{{--</head>--}}
{{--<body>--}}
{{--<nav class="navbar navbar-expand-lg bg-dark navbar-dark">--}}
    {{--<a class="navbar-brand" href="https://laravel.ru/docs/v5"><img class="rounded" src="{{url('public/images/main/homepage/logo.png')}}" alt="Laralogo" width="35" height="35"></a>--}}
    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}

    {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
        {{--<ul class="navbar-nav mr-auto">--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{url('/contacts')}">Contacts</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{url('/category')}}">Category</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{url('/news')}}">News</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--Dropdown--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item" href="#">Action</a>--}}
                    {{--<a class="dropdown-item" href="#">Another action</a>--}}
                    {{--<div class="dropdown-divider"></div>--}}
                    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
        {{--<form class="form-inline my-2 my-lg-0" action="{{url('/search')}}" name="searchform">--}}
            {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchform">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}
    {{--</div>--}}
{{--</nav>--}}