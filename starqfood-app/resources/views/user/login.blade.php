<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous"
    >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Indie+Flower&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.simplyhealth.co.uk/shcore/sh/furniture/images/svgs/top-nav-account-icon.svg">
    <link rel="stylesheet" href={{URL::asset('css/user_style/login.css')}}>
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <title>Login</title>
</head>
<body>
    <a href="./home.html" class="cta">
        <svg viewBox="0 0 13 10" height="15px" width="20px">
            <path d="M12,5 L2,5"></path>
            <polyline points="5 1 1 5 5 9"></polyline>
        </svg>
        <span>Regresar</span>
    </a>
    <div class="bubbles">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
    </div>

    <div class="container animated zoomInDown" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                @csrf

                <h1>Crear una cuenta</h1>
                <div class="social-container">
                    <a href="https://es-la.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o use su correo electrónico para registrarse</span>
                <input type="text" placeholder="Nombre" />
                <input type="email" placeholder="Correo" />
                <input type="password" placeholder="Contraseña" />
                <input type="password" placeholder="Confirmar contraseña" />
                <div class="center">
                    <label>Marque esta casilla para registrarse <input type="checkbox" name=""></label>
                </div>
                <button>Inscribirse</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Iniciar sesión</h1>
                <!-- <div class="social-container">
                    <a href="https://es-la.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>o usa tu cuenta</span> -->
                <input type="email" name="email" placeholder="Correo" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Contraseña"  class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <a class="passp" href={{ route('password.request') }} id="openModal">¿Olvidaste tu contraseña?</a>
                <button  onclick="mostrarAvatar()">Iniciar sesión</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                    <button class="ghost" id="signIn">Iniciar sesión</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Hola!</h1>
                    <p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
                    <button onclick="cerrarSesion()" class="ghost" id="signUp">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-container" id="modal">
        <div class="modal-content">
            <h2>Ingrese su correo con el que se ha registrado</h2>
            <p>Te enviaremos indicaciones a tu correo, por favor revisa tu bandeja de entrada.</p>
            <input type="email" placeholder="Correo" />
            <div class="close" id="close">
                <button class="salir">Salir</button>
                <button>Enviar</button>
            </div>
        </div>
    </div>

    <script src='js/user_js/login.js'></script>
    <script src='js/user_js/home.js'></script>
</body>
</html>
