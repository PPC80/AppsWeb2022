<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="titulo">
        <h1>Formulario de Registro</h1>
    </div>
    <div class="form-tag">
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Nombre</label>
              <input class="form-control" id="exampleInputName1" name="nombre">
            </div>
            <div class="mb-3">
              <label for="exampleInputLastName1" class="form-label">Apellido</label>
              <input class="form-control" id="exampleInputLastName1" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputAge1" class="form-label">Edad</label>
                <input class="form-control" id="exampleInputAge1" name="edad">
              </div>

            <div class="radio-btns">
                <h6>Género:</h6>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="exampleCheck1">Masculino</label>
                  <input type="radio" class="form-check-input" id="exampleCheck1" name="genero">
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="exampleCheck2">Femenino</label>
                  <input type="radio" class="form-check-input" id="exampleCheck2" name="genero">
                </div>
            </div>

            <div class="check-boxes">
                <h6>Habilidades:</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-btn1" name="roles">
                    <label class="form-check-label" for="check-btn1">
                      PHP
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-btn2" checked name="roles">
                    <label class="form-check-label" for="check-btn2">
                    JS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check-btn3" checked name="roles">
                    <label class="form-check-label" for="check-btn3">
                    C++
                    </label>
                </div>
            </div>

            <div class="mb-3 file-input">
                <label for="formFileSm" class="form-label">Foto de Perfil:</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file" name="archivo">
            </div>

            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="estado">
                <option selected>Seleccione su estado civil</option>
                <option value="soltero">Soltero</option>
                <option value="casado">Casado</option>
            </select>

            <div class="input-group text-area">
                <span class="input-group-text">Mensaje</span>
                <textarea class="form-control" aria-label="With textarea" name="mensaje"></textarea>
              </div>
            
            
            <button type="submit" class="btn btn-primary btn-enviar">Enviar</button>
          </form>
          
    </div>
    
    <?php

    //uso de formularios
    //se remienda utilizar POST
    // $_REQUEST es para cuando no se sabe si utilizar POST o GET
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $genero = $_REQUEST['genero'];
    $habilidades = $_REQUEST['roles'];
    $archivo = $_FILES['archivo'];
    $patch = 
    $_SERVER['DOCUMENT_ROOT'].'/img'.$archivo['name'];
    move_uploaded_file($archivo['tmp_name'], $patch);
    $estado = $_REQUEST['estado'];
    $mensake = $_REQUEST['mensaje'];
    echo "El nombre del usuario es: $nombre <br>";
    echo "El apellido del usuario es: $apellido <br>";
    echo "La edad del usuario es: $edad <br>";
    echo "El genero del usuario es: $genero <br>";
    echo "Las habilidades del usuario son:";
    if($habilidades){
    foreach($habilidades as $habilidad){
        echo "<ul>
        <li>
            $habilidad
        </li>
        </ul>";
    }
    }
    if($archivo['name'] != ""){
    $pathx = "../img/";
    $file = $archivo['name'];
    echo '<img src="'.$pathx.$file.'">';
    }
    echo "<br>";
    echo "El estado civil del usuario es: $estado <br>";
    echo "El mensaje del usuario es: $mensaje <br>";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>