<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./estilos/perfilUser.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/4b8e039d18.css" crossorigin="anonymous">
    <!-- fuente google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Indie+Flower&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <a href="./home.html" class="cta">
        <svg viewBox="0 0 13 10" height="15px" width="20px">
            <path d="M12,5 L2,5"></path>
            <polyline points="5 1 1 5 5 9"></polyline>
        </svg>
        <span>Regresar</span>
    </a>
    <div class="container animated bounceInDown">
        <div class="lefbox">
            <nav>
                <a onclick="tabs(0)" class="tab active">
                    <i class="fa fa-user"></i>
                </a>
                <a onclick="tabs(1)" class="tab">
                    <i class="fa-solid fa-lock"></i>
                </a>
                <a onclick="tabs(2)" class="tab">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a onclick="tabs(3)" class="tab">
                    <i class="fa-solid fa-image"></i>
                </a>
            </nav>
        </div>
        <div class="rightbox">
            <div class="profile tabShow">
                <h1>Información Personal</h1>
                <h2>Usuario</h2>
                <input type="text" class="input" value="robertoCh77">
                <h2>Nombre</h2>
                <input type="text" class="input" value="Roberto">
                <h2>Apellido</h2>
                <input type="text" class="input" value="Chacón">
                <div class="btn-container">
                    <button class="btn">Actualizar</button>
                </div>
            </div>
            <div class="profile tabShow">
                <h1>Editar de contraseña</h1>
                <h2>Contraseña actual</h2>
                <input type="password" class="input" value="123456rch">
                <h2>Contraseña nueva</h2>
                <input type="password" class="input" value="123456rch">
                <div class="btn-container">
                    <button class="btn">Actualizar</button>
                </div>
            </div>
            <div class="profile tabShow">
                <h1>Editar Corrreo</h1>
                <h2>Correo</h2>
                <input type="text" class="input" value="robertochacon7766@hotmail.com">
                <div class="btn-container">
                    <button class="btn">Actualizar</button>
                </div>
            </div>
            <div class="profile tabShow">
                <h1>Editar Foto</h1>
                <h2>Tu Foto</h2>
                <br>
                <div class="img-container">
                    <img src="./img/circle-user-solid.svg" alt="">
                </div>
                <br>
                <input class="foto" type="file" name="nombre-del-campo">
                <div class="btn-container">
                    <button class="btn">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/4b8e039d18.js" crossorigin="anonymous"></script>
    <script src="./scripts/perfilUser.js"></script>
    <script>
        $(".tab").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })
    </script>
</body>
</html>
