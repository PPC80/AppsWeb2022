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

    <div class="contenedor-formulario contenedor animated rotateInDownRight ">
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
                </table>
            </div>
        </form>
    </div>

    <div class="modal-container" id="modal">
        <div class="modal-content">
            <h2>Calidad de Atención</h2>
            <p>Califica la calidad de atención del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="atencion" value="malo" id="atencion-malo">
                    <label for="atencion-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="regular" id="atencion-regular">
                    <label for="atencion-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="bueno" id="atencion-bueno">
                    <label for="atencion-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="buenisimo" id="atencion-buenisimo">
                    <label for="atencion-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="atencion" value="excelente" id="atencion-excelente">
                    <label for="atencion-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <div class="close" id="close">
                <button>Enviar</button>
            </div>
        </div>
    </div>

    <div class="modal-container" id="modalComida">
        <div class="modal-content">
            <h2>Calidad de Comida</h2>
            <p>Califica la calidad de comida del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="comida" value="malo" id="comida-malo">
                    <label for="comida-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="regular" id="comida-regular">
                    <label for="comida-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="bueno" id="comida-bueno">
                    <label for="comida-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="buenisimo" id="comida-buenisimo">
                    <label for="comida-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="comida" value="excelente" id="comida-excelente">
                    <label for="comida-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <div class="close" id="closeC">
                <button>Enviar</button>
            </div>
        </div>
    </div>

    <div class="modal-container" id="modalTiempo">
        <div class="modal-content">
            <h2>Tiempo de Preparación</h2>
            <p>Califica el tiempo de preparación del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="tiempo" value="malo" id="tiempo-malo">
                    <label for="tiempo-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="regular" id="tiempo-regular">
                    <label for="tiempo-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="bueno" id="tiempo-bueno">
                    <label for="tiempo-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="buenisimo" id="tiempo-buenisimo">
                    <label for="tiempo-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="excelente" id="tiempo-excelente">
                    <label for="tiempo-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <div class="close" id="closeT">
                <button>Enviar</button>
            </div>
        </div>
    </div>

    <div class="modal-container" id="modalVariacion">
        <div class="modal-content">
            <h2>Variación de Platos</h2>
            <p>Califica la variación de platos del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="tiempo" value="malo" id="variacion-malo">
                    <label for="variacion-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="regular" id="variacion-regular">
                    <label for="variacion-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="bueno" id="variacion-bueno">
                    <label for="variacion-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="buenisimo" id="variacion-buenisimo">
                    <label for="variacion-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="tiempo" value="excelente" id="variacion-excelente">
                    <label for="variacion-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <div class="close" id="closeV">
                <button>Enviar</button>
            </div>
        </div>
    </div>


    <div class="modal-container" id="modalAmbiente">
        <div class="modal-content">
            <h2>Ambiente</h2>
            <p>Califica el ambiente del restaurante.</p>
            <div class="container-star">
                <div class="rating-container">
                    <input type="radio" name="ambiente" value="malo" id="ambiente-malo">
                    <label for="ambiente-malo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="regular" id="ambiente-regular">
                    <label for="ambiente-regular"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="bueno" id="ambiente-bueno">
                    <label for="ambiente-bueno"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="buenisimo" id="ambiente-buenisimo">
                    <label for="ambiente-buenisimo"><i class="fas fa-star"></i></label>
                    <input type="radio" name="ambiente" value="excelente" id="ambiente-excelente">
                    <label for="ambiente-excelente"><i class="fas fa-star"></i></label>
                </div>
            </div>
            <div class="close" id="closeA">
                <button>Enviar</button>
            </div>
        </div>
    </div>
    <script src='js/user_js/evaluacionesRest.js'></script>
</body>
</html>
