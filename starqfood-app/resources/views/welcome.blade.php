@php
    $home = '#';
    // $vista_restaurantes = route('restaurants')
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href={{ URL::asset('css/admin/user_style/home.css') }}>

    <link rel="stylesheet" href="https://kit.fontawesome.com/4b8e039d18.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Indie+Flower&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sacramento&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>

<body>
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
                    <li><a href={{ $home }} class="nav">Inicio</a></li>
                    <!-- <li><a href="#about" class="nav">Acerca de</a></li> -->
                    {{-- <li><a href={{$vista_restaurantes}} class="nav">Restaurantes</a></li> --}}
                    <!-- <li><a href="#services" class="nav">Servicio</a></1i> -->
                    <li><a href="./contacto.html" class="nav">Contacto</a></li>
                    <li><a href={{ route('login') }} class="nav">Iniciar sesión</a></li>
                </ul>
                <img src="{{asset('image/user_img/img-user/user2.png')}}" class="user-pic" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="{{asset('image/user_img/img-user/user2.png')}}" alt="">
                            <h3>Bienvenido!</h3>
                        </div>
                        <hr>
                        <a href="./perfilUser.html" class="sub-menu-link">
                            <img src="{{asset('image/user_img/img-user/profile.png')}}">
                            <p>Editar perfil</p>
                            <span> > </span>
                        </a>

                        <a class="sub-menu-link" href={{ route('logout') }}
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <img src="{{asset('image/user_img/img-user/logout.png')}}">
                            <p> Cerrar Sesión </p>
                            <span> > </span>
                            <form id="logout-form" action={{ route('logout')}} method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
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
                <img src="{{asset('image/user_img/home1.png')}}">
            </div>
        </section>

        <!-- about start -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="{{asset('image/user_img/starqfood.png')}}">
            </div>

            <div class="about-text">
                <span>Sobre nosotros</span>
                <h2>Star Q Food <br> ¿Quiénes somos?</h2>
                <p>
                    Star Q Food es una plataforma ecuatoriana en la que encontraras restaurantes
                    exclusivos. Al buscar un lugar donde comer, pensamos en el lugar, la calidad y también en la
                    comodidad de todos.
                    Por lo que empleamos nuestro servicio para facilitarte tu lugar preferido
                    Gracias por ser parte de nuestra familia de clientes.
                </p>
                <a href='#' class="btn">Leer más</a>
            </div>
        </section>

        <!-- menu start -->
        <section class="menu" id="menu">
            <div class="heading">
                <span>FastFood menú</span>
                <h2>Sabor fresco y buen precio</h2>
            </div>

            <div class="menu-container">
                <div class="box">
                    <div class="box-img">
                        <img src="{{asset('image/user_img/food1.png')}}">
                    </div>
                    <h2>Hamburguesa de pollo</h2>
                    <h3>Comida sabrosa</h3>
                    <span>$5.00</span>
                    <i class="bx bx-right-arrow-alt"></i>
                    <!-- class="bx bx-cart-alt" -->
                </div>
                <div class="box">
                    <div class="box-img">
                        <img src="{{asset('image/user_img/food2.png')}}">
                    </div>
                    <h2>Hamburguesa Especial de Ternera</h2>
                    <h3>Comida sabrosa</h3>
                    <span>$6.99</span>
                    <i class="bx bx-right-arrow-alt"></i>
                </div>
                <div class="box">
                    <div class="box-img">
                        <img src="{{asset('image/user_img/food3.png')}}">
                    </div>
                    <h2>Paquete de pollo frito</h2>
                    <h3>Comida sabrosa</h3>
                    <span>$19.99</span>
                    <i class="bx bx-right-arrow-alt"></i>
                </div>
            </div>
        </section>

        <!-- service start -->
        <section class="services" id="services">
            <div class="heading">
                <span>Servicios</span>
                <h2>Brindamos los mejores lugares de calidad</h2>
            </div>

            <div class="service-container">
                <div class="s-box">
                    <img src="{{asset('image/user_img/s3.png')}}">
                    <h3>Atención al cliente</h3>
                    <p>
                        La atención al cliente es un aspecto clave en cualquier restaurante,
                        ya que la calidad del servicio puede afectar la experiencia general del cliente.
                        El servicio debe ser rápido y eficiente, pero también amable y atento.
                        Los meseros deben estar disponibles para atender las necesidades de los clientes,
                        como tomar sus órdenes, recomendar platillos y bebidas,
                        y responder preguntas sobre el menú.
                    </p>
                </div>

                <div class="s-box">
                    <img src="{{asset('image/user_img/tiempo.png')}}">
                    <h3>Tiempo de preparación del platillo</h3>
                    <p>
                        El tiempo de preparación de un platillo en un restaurante puede variar dependiendo de varios
                        factores,
                        como el tipo de comida, la complejidad del platillo,
                        la cantidad de pedidos en el momento, la capacidad de la cocina y la habilidad
                        del personal de cocina. En general, los restaurantes tienen una estimación del tiempo de
                        preparación para cada platillo,
                        y se esfuerzan por cumplir con este tiempo para satisfacer a los clientes.
                    </p>
                </div>

                <div class="s-box">
                    <img src="{{asset('image/user_img/restaurante.png')}}">
                    <h3>Entorno de un restaurante</h3>
                    <p>
                        El entorno de un restaurante también es importante para la
                        experiencia del cliente. El ambiente debe ser acogedor y agradable,
                        con una iluminación adecuada y una decoración apropiada al estilo del
                        restaurante. La limpieza y la higiene son fundamentales en
                        cualquier establecimiento de comida y deben ser prioritarias para
                        garantizar la satisfacción y bienestar de los clientes.
                    </p>
                </div>
            </div>
        </section>

        <!-- call to action -->
        <section class="cta">
            <h2>¿Eres dueño de un restaurante? <br> Utiliza nuestra App</h2>
            <a href="./contacto.html" class="btn">Vamos a hablar</a>
        </section>

        <!-- footer start -->
        <section id="contact">
            <div class="footer">
                <div class="main">
                    <div class="col">
                        <h4>Enlaces de menú</h4>
                        <ul>
                            <li><a href="#">Inicio</a></1i>
                            <li><a href="#">Acerca de</a></li>
                            <li><a href="#">Restaurantes</a></1i>
                            <li><a href="#">Servicio</a></1i>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Nuestro servicio</h4>
                        <ul>
                            <li><a href="#">Diseño Web</a></1i>
                            <li><a href="#">Desarrollo Web</a></li>
                            <li><a href="#">Diseño gráfico</a></1i>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Información</h4>
                        <ul>
                            <li><a href="#">Acerca de</a></1i>
                            <li><a href="#">Política de privacidad</a></li>
                            <li><a href="#">Términos y condiciones</a></1i>
                        </ul>
                    </div>

                    <div class="col">
                        <h4>Contáctanos</h4>
                        <div class="social">
                            <a href="#"><i class="bx bxl-facebook"></i></a>
                            <a href="#"><i class="bx bxl-instagram"></i></a>
                            <a href="#"><i class="bx bxl-twitter"></i></a>
                            <a href="#"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <script src='js/user_js/home.js'></script>
</body>

</html>
