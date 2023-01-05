<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web / Introduccion</title>
</head>
<body>
    <p>
        <a href="{{route('home')}}">HOME</a>
        <a href="{{route('blog')}}">BLOG</a>

        @auth
        <a href="{{route('dashboard')}}">DASHBOARD</a>
        @else
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Registrarse</a>
        @endauth

        <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
            <input type="search" placeholder="Buscar Posts" class="form-control mr-sm-2" name="query">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

        </form>
    </p>
    <hr>
    @yield('content')
</body>
</html>
