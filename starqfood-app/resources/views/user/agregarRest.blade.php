<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agragar restaurante</title>
    <link rel="stylesheet" href="./estilos/agregarRest.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/4b8e039d18.css" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Indie+Flower&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sacramento&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <a href="./restaurante.html" class="cta">
        <svg viewBox="0 0 13 10" height="15px" width="20px">
            <path d="M12,5 L2,5"></path>
            <polyline points="5 1 1 5 5 9"></polyline>
        </svg>
        <span>Regresar</span>
    </a>
    <div class="contenedor-formulario contenedor animated zoomInDown">
        <div class="imagen-formulario">
        </div>
        <form class="formulario" action="#" method="post">
            <div class="texto-formulario">
                <h1>Inscribir Restaurante</h1>
                <p>Por favor ingrese información verdadera, nuestro equipo de trabajo verificara si la información
                    ingresada es real.</p>
            </div>
            <div class="tabla">
                <table>
                    <tr>
                        <td class="textcamp">Nombre del restaurante:</td>
                        <td>
                            <div class="reg-rest">
                                <input type="text" class="input" value="Poli burguer">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Ubicación:</td>
                        <td>
                            <div class="reg-rest">
                                <input type="text" class="input" value="Av. Colon">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Ruc:</td>
                        <td>
                            <div class="reg-rest">
                                <input type="text" class="input" value="1244568732465">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Descripción:</td>
                        <td>
                            <div class="reg-rest">
                                <input type="text" class="input" value="local de comida rapida">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Categoría:</td>
                        <td>
                            <select class="form-select reg-rest" aria-label="Default select example">
                                <option selected>Seleccione la categoría</option>
                                <option value="1">Almuerzo</option>
                                <option value="2">Comida rápida</option>
                                <option value="3">Desayunos</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Foto del restaurante:</td>
                        <td>
                            <div class="reg-rest">
                                <input type="file" class="input" id="file" accept="image/*">
                                <label for="file"><i class="fa-sharp fa-solid fa-file-image"></i>Subir foto</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="contenedor_btn">
                                <button class="button">Enviar</button>
                                <!-- <input class="button" type="submit" value="Enviar"> -->
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/4b8e039d18.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
