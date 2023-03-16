<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Restaurante</title>
    <!-- estilos -->
    <link rel="stylesheet" href={{URL::asset('css/admin/user_style/detalleRestaurante.css')}}>
    <!-- herramientas  -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/4b8e039d18.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- fuete google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Indie+Flower&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <div class="animated bounceInLeft">
        <header>
            <a href="./home.html" class="logo">Star Q Food</a>
            <div class="bx bx-menu" id="menu-icon" color="#d24242">

            </div>
            <ul class="navbar">
                <li><a href="./restaurante.html" class="nav">Restaurantes</a></li>
                <li><a href="./evaluacionesRest.html" class="nav">Evaluación</a></li>
                <li><a href="#" class="nav">Reseñas</a></li>
            </ul>
        </header>

        <section class="restaurante" id="restaurante">
            <div class="restaurante-text">
                <h1>Poli Burguer</h1>
            </div>
            <div class="restaurante-img">
                <img src="img/poliburguer.png">
            </div>
            <div class="restaurante-text">
                <div class="ubicacion-contenedor">
                    <a href="./ubicacionRestaurante.html" class="ubicacion">Ver ubicación</a>
                </div>

                <div class="rating">
                    <input type="radio" name="rating" id="star1" value="1">
                    <label for="star1"></label>
                    <input type="radio" name="rating" id="star2" value="2">
                    <label for="star2"></label>
                    <input type="radio" name="rating" id="star3" value="3">
                    <label for="star3"></label>
                    <input type="radio" name="rating" id="star4" value="4">
                    <label for="star4"></label>
                    <input type="radio" name="rating" id="star5" value="5">
                    <label for="star5"></label>
                </div>

                <h2>Buenos precios! <br>Calidad en hamburguesas y papas fritas</h2>
                <a href='./platillos.html' class="btn">Menú de hoy</a>
            </div>
        </section>

        <div class="menu">
            <span>FastFood menú</span>
            <h2>Sabor fresco y buen precio</h2>
        </div>


        <section class="slider-conatiner">
            <div class="slider-item">
                <img src="./img/scroll1.png" alt="1">
            </div>
            <div class="slider-item">
                <img src="./img/scroll2.png" alt="2">
            </div>
            <div class="slider-item">
                <img src="./img/scroll3.png" alt="3">
            </div>
            <div class="slider-item">
                <img src="/img/scroll4.png" alt="4">
            </div>
            <div class="slider-item">
                <img src="./img/scroll5.png" alt="5">
            </div>
            <div class="slider-item">
                <img src="./img/scroll6.png" alt="1">
            </div>
            </section>
    </div>
    <script src='js/user_js/detalleRestaurante.js'></script>
</body>
</html>
