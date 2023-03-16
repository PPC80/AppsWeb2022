@php
    $home = '#';
    
    //$nameAuth = explode(' ', Auth::user()->profile->name)[0] . ' ' . explode(' ', Auth::user()->profile->last_name)[0];
    $profileImg = Auth::user()->profile->image->url ?? URL::asset('image/user_img/img-user/user2.png');
    $logoutImg = URL::asset('image/user_img/img-user/user2.png');
@endphp
<x-layouts.app title='Welcome'>
    <div class="lds-roller loader" id="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="animated fadeIn">
        <div class="hero">
            <a href={{ $home }} class="logo">Star Q Food</a>
            <div class="bx bx-menu" id="menu-icon" color="#d24242"></div>
            <div class="navbar-img">
                <ul class="navbar">
                    <li><a href={{ '#' }} class="nav">Restaurantes</a></li>
                    <li><a href="./contacto.html" class="nav">Contacto</a></li>
                    <li><a href="#about" class="nav">Acerca de</a></li>
                    @auth
                        <li><a href={{ route('home') }} class="nav">Inicio</a></li>
                    @endauth
                    @guest
                        <li><a href={{ route('login') }} class="nav">Iniciar sesión</a></li>
                    @endguest


                    <!-- <li><a href="#about" class="nav">Acerca de</a></li> -->
                    {{-- <li><a href={{$vista_restaurantes}} class="nav">Restaurantes</a></li> --}}
                    <!-- <li><a href="#services" class="nav">Servicio</a></1i> -->


                </ul>
                <img src="{{ $profileImg }}" class="user-pic" onclick="toggleMenu()">
                @auth
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <img src={{ $logoutImg }} alt="">
                                <h3>{{ $nameAuth = explode(' ', Auth::user()->profile->name)[0] . ' ' . explode(' ', Auth::user()->profile->last_name)[0] }}
                                </h3>
                            </div>
                            <hr>
                            <a href="./perfilUser.html" class="sub-menu-link">
                                <img src="{{ asset('image/user_img/img-user/profile.png') }}">
                                <p>Editar perfil</p>
                                <span> > </span>
                            </a>

                            <a class="sub-menu-link" href={{ route('logout') }}
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <img src="{{ asset('image/user_img/img-user/logout.png') }}">
                                <p> Cerrar Sesión </p>
                                <span> > </span>
                                <form id="logout-form" action={{ route('logout') }} method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
    </div>
    <!-- home start -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Come Bien</h1>
            <h2>Elije tu! <br>La mejor comida de tu ciudad</h2>
            <p></p>
            <!-- <a href='./restaurante.html' class="btn">Menú de hoy</a> -->
        </div>

        <div class="home-img">
            <img src="{{ asset('image/user_img/home1.png') }}">
        </div>
    </section>

    <script src='js/user_js/home.js'></script>
</x-layouts.app>
