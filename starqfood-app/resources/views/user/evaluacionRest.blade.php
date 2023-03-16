<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluaciones</title>
    <link rel="stylesheet" href={{URL::asset('css/admin/user_style/evaluacionesRest.css')}}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <a href="./detalleRestaurante.html" class="cta">
        <svg viewBox="0 0 13 10" height="15px" width="20px">
            <path d="M12,5 L2,5"></path>
            <polyline points="5 1 1 5 5 9"></polyline>
        </svg>
        <span>Regresar</span>
    </a>

<div class="contenedor-formulario contenedor animated rotateInDownRight "></div>
        <div class="imagen-formulario">
        </div>
        <form class="formulario" action="#" method="post">
            <div class="texto-formulario">
                <h1>Califica tu experiencia en el restaurante</h1>
                <p>Por favor califica los siguientes aspectos de tu experiencia en el restaurante. La calificación nos
                    permite saber
                    los mejores restaurantes y desechar los de baja categoría, para que tengas una buena experiencia.
                </p>
            </div>
            <div class="tabla">
                <table>
                    <tr>
                        <td class="textcamp">Calidad de Atención:</td>
                        <td>
                            <div class="reg-rest">
                                <a class="btn-calif" href="#" id="openModal">Calificar</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Calidad de Comida:</td>
                        <td>
                            <div class="reg-rest">
                                <a class="btn-calif" href="#" id="openComida">Calificar</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Tiempo de Preparación:</td>
                        <td>
                            <div class="reg-rest">
                                <a class="btn-calif" href="#" id="openTiempo">Calificar</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Variación de Platos:</td>
                        <td>
                            <div class="reg-rest">
                                <a class="btn-calif" href="#" id="openVariacion">Calificar</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="textcamp">Ambiente:</td>
                        <td>
                            <div class="reg-rest">
                                <a class="btn-calif" href="#" id="openAmbiente">Calificar</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="contenedor_btn">
                                <button class="button" type="submit">Enviar</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

<form clase="contenedor-from" method="POST" action="{{ route('calificacion.store') }}">
    @csrf
    <div class="modal-container" id="modal">
        <div class="modal-content">
            <h2>Calidad de Atención</h2>
            <p>Califica la calidad de atención del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="atencion" value="5" id="atencion-malo">
                    <label for="atencion-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="4" id="atencion-regular">
                    <label for="atencion-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="3" id="atencion-bueno">
                    <label for="atencion-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="2" id="atencion-buenisimo">
                    <label for="atencion-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="1" id="atencion-excelente">
                    <label for="atencion-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <input type="hidden" name="calificacion_atencion" id="calificacion-atencion" value="">
            <div class="close" id="close">
                <a href="#" class="button">Enviar</a>
            </div>
        </div>
    </div>

    <script>
        var ratingContainers = document.querySelectorAll('.rating-container');
        for (var i = 0; i < ratingContainers.length; i++) {
            var ratingInputs = ratingContainers[i].querySelectorAll('input[type="radio"]');
            for (var j = 0; j < ratingInputs.length; j++) {
            ratingInputs[j].addEventListener('click', function() {
                var ratingValue = this.value;
                document.getElementById('calificacion-atencion').value = ratingValue;
            });
            }
        }
    </script>


    <div class="modal-container" id="modalComida">
        <div class="modal-content">
            <h2>Calidad de Comida</h2>
            <p>Califica la calidad de comida del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="comida" value="5" id="comida-malo">
                    <label for="comida-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="4" id="comida-regular">
                    <label for="comida-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="3" id="comida-bueno">
                    <label for="comida-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="2" id="comida-buenisimo">
                    <label for="comida-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="1" id="comida-excelente">
                    <label for="comida-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <input type="hidden" name="calificacion_comida" id="calificacion-comida" value="">
            <div class="close" id="closeC">
                <a href="#" class="button">Enviar</a>
            </div>
        </div>
    </div>

    <script>
        var ratingContainers = document.querySelectorAll('.rating-container');
        for (var i = 0; i < ratingContainers.length; i++) {
            var ratingInputs = ratingContainers[i].querySelectorAll('input[type="radio"]');
            for (var j = 0; j < ratingInputs.length; j++) {
            ratingInputs[j].addEventListener('click', function() {
                var ratingValue = this.value;
                document.getElementById('calificacion-comida').value = ratingValue;
            });
            }
        }
    </script>

    <div class="modal-container" id="modalTiempo">
        <div class="modal-content">
            <h2>Tiempo de Preparación</h2>
            <p>Califica el tiempo de preparación del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="tiempo" value="5" id="tiempo-malo">
                    <label for="tiempo-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="4" id="tiempo-regular">
                    <label for="tiempo-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="3" id="tiempo-bueno">
                    <label for="tiempo-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="2" id="tiempo-buenisimo">
                    <label for="tiempo-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="1" id="tiempo-excelente">
                    <label for="tiempo-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <input type="hidden" name="calificacion_tiempo" id="calificacion-tiempo" value="">
            <div class="close" id="closeT">
                <a href="#" class="button">Enviar</a>
            </div>
        </div>
    </div>

    <script>
        var ratingContainers = document.querySelectorAll('.rating-container');
        for (var i = 0; i < ratingContainers.length; i++) {
            var ratingInputs = ratingContainers[i].querySelectorAll('input[type="radio"]');
            for (var j = 0; j < ratingInputs.length; j++) {
            ratingInputs[j].addEventListener('click', function() {
                var ratingValue = this.value;
                document.getElementById('calificacion-tiempo').value = ratingValue;
            });
            }
        }
    </script>

    <div class="modal-container" id="modalVariacion">
        <div class="modal-content">
            <h2>Variación de Platos</h2>
            <p>Califica la variación de platos del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="tiempo" value="5" id="variacion-malo">
                    <label for="variacion-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="4" id="variacion-regular">
                    <label for="variacion-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="3" id="variacion-bueno">
                    <label for="variacion-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="2" id="variacion-buenisimo">
                    <label for="variacion-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="1" id="variacion-excelente">
                    <label for="variacion-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <input type="hidden" name="calificacion_platos" id="calificacion-platos" value="">
            <div class="close" id="closeV">
                <a href="#" class="button">Enviar</a>
            </div>
        </div>
    </div>

    <script>
        var ratingContainers = document.querySelectorAll('.rating-container');
        for (var i = 0; i < ratingContainers.length; i++) {
            var ratingInputs = ratingContainers[i].querySelectorAll('input[type="radio"]');
            for (var j = 0; j < ratingInputs.length; j++) {
            ratingInputs[j].addEventListener('click', function() {
                var ratingValue = this.value;
                document.getElementById('calificacion-platos').value = ratingValue;
            });
            }
        }
    </script>


    <div class="modal-container" id="modalAmbiente">
        <div class="modal-content">
            <h2>Ambiente</h2>
            <p>Califica el ambiente del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="ambiente" value="5" id="ambiente-malo">
                    <label for="ambiente-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="4" id="ambiente-regular">
                    <label for="ambiente-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="3" id="ambiente-bueno">
                    <label for="ambiente-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="2" id="ambiente-buenisimo">
                    <label for="ambiente-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="1" id="ambiente-excelente">
                    <label for="ambiente-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <input type="hidden" name="calificacion_ambiente" id="calificacion-ambiente" value="">
            <div class="close" id="closeA">
                <a href="#" class="button">Enviar</a>
            </div>
        </div>
    </div>

    <script>
        var ratingContainers = document.querySelectorAll('.rating-container');
        for (var i = 0; i < ratingContainers.length; i++) {
            var ratingInputs = ratingContainers[i].querySelectorAll('input[type="radio"]');
            for (var j = 0; j < ratingInputs.length; j++) {
            ratingInputs[j].addEventListener('click', function() {
                var ratingValue = this.value;
                document.getElementById('calificacion-ambiente').value = ratingValue;
            });
            }
        }
    </script>
</form>

    <script src='js/user_js/evaluacionesRest.js'></script>
</body>
</html>
