<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>
    <link rel="stylesheet" href={{URL::asset('css/admin/user_style/restaurantes.css')}}>
    <link rel="stylesheet" href="https://kit.fontawesome.com/4b8e039d18.css" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Indie+Flower&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
</head>
<body>
    <div class="animated fadeIn">
        <header>
            <!-- <a href="./home.html" class="cta">
                <svg viewBox="0 0 13 10" height="15px" width="20px">
                    <path d="M12,5 L2,5"></path>
                    <polyline points="5 1 1 5 5 9"></polyline>
                </svg>
            </a> -->

            <a href="./home.html" class="logo">Star Q Food</a>
            <div class="bx bx-menu" id="menu-icon" color="#d24242"></div>
            <ul class="navbar">
                <li><a href="./ubicaciones.html">Ubicaciones</a></li>
                <li><a href="./agregarRest.html">Inscribir Restaurante</a></li>
                <li><a href="./agregarPlato.html">Agregar Plato</a></li>
            </ul>
        </header>
        <div class="container-buscar">
            <input type="text" placeholder="Buscar">
            <div class="btn-buscar">
                <i class="fa fa-search"></i>
            </div>
        </div>

        <div class="restaurantes">
            <section class="home" id="home">
                <div class="home-text">
                    <h1>Poli Burguer</h1>
                    <div class="star-widget">
                        <input type="radio" name="atencion" value="excelente" id="atencion-excelente">
                        <label for="atencion-excelente" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="buenisimo" id="atencion-buenisimo">
                        <label for="atencion-buenisimo" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="bueno" id="atencion-bueno">
                        <label for="atencion-bueno" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="regular" id="atencion-regular">
                        <label for="atencion-regular" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="malo" id="atencion-malo">
                        <label for="atencion-malo" class="fas fa-star kkol"></label>
                    </div>
                    <h2>Buenos precios!<br></h2>
                    <p>Calidad en hamburguesas y papas fritas</p>
                    <a href='./detalleRestaurante.html' class="btn">Ir</a>
                </div>
                <div class="home-img">
                    <img src="img/poliburguer.png">
                </div>
            </section>

            <section class="home" id="home">
                <div class="home-text">
                    <h1>Poli Burguer</h1>
                    <div class="star-widget">
                        <input type="radio" name="atencion" value="excelente" id="atencion-excelente">
                        <label for="atencion-excelente" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="buenisimo" id="atencion-buenisimo">
                        <label for="atencion-buenisimo" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="bueno" id="atencion-bueno">
                        <label for="atencion-bueno" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="regular" id="atencion-regular">
                        <label for="atencion-regular" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="malo" id="atencion-malo">
                        <label for="atencion-malo" class="fas fa-star kkol"></label>
                    </div>
                    <h2>Buenos precios!<br></h2>
                    <p>Calidad en hamburguesas y papas fritas</p>
                    <a href='#' class="btn">Ir</a>
                </div>
                <div class="home-img">
                    <img src="img/poliburguer.png">
                </div>
            </section>

            <section class="home" id="home">
                <div class="home-text">
                    <h1>Poli Burguer</h1>
                    <div class="star-widget">
                        <input type="radio" name="atencion" value="excelente" id="atencion-excelente">
                        <label for="atencion-excelente" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="buenisimo" id="atencion-buenisimo">
                        <label for="atencion-buenisimo" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="bueno" id="atencion-bueno">
                        <label for="atencion-bueno" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="regular" id="atencion-regular">
                        <label for="atencion-regular" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="malo" id="atencion-malo">
                        <label for="atencion-malo" class="fas fa-star kkol"></label>
                    </div>
                    <h2>Buenos precios!<br></h2>
                    <p>Calidad en hamburguesas y papas fritas</p>
                    <a href='#' class="btn">Ir</a>
                </div>
                <div class="home-img">
                    <img src="img/poliburguer.png">
                </div>
            </section>

            <section class="home" id="home">
                <div class="home-text">
                    <h1>Poli Burguer</h1>
                    <div class="star-widget">
                        <input type="radio" name="atencion" value="excelente" id="atencion-excelente">
                        <label for="atencion-excelente" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="buenisimo" id="atencion-buenisimo">
                        <label for="atencion-buenisimo" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="bueno" id="atencion-bueno">
                        <label for="atencion-bueno" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="regular" id="atencion-regular">
                        <label for="atencion-regular" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="malo" id="atencion-malo">
                        <label for="atencion-malo" class="fas fa-star kkol"></label>
                    </div>
                    <h2>Buenos precios!<br></h2>
                    <p>Calidad en hamburguesas y papas fritas</p>
                    <a href='#' class="btn">Ir</a>
                </div>
                <div class="home-img">
                    <img src="img/poliburguer.png">
                </div>
            </section>

            <section class="home" id="home">
                <div class="home-text">
                    <h1>Poli Burguer</h1>
                    <div class="star-widget">
                        <input type="radio" name="atencion" value="excelente" id="atencion-excelente">
                        <label for="atencion-excelente" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="buenisimo" id="atencion-buenisimo">
                        <label for="atencion-buenisimo" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="bueno" id="atencion-bueno">
                        <label for="atencion-bueno" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="regular" id="atencion-regular">
                        <label for="atencion-regular" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="malo" id="atencion-malo">
                        <label for="atencion-malo" class="fas fa-star kkol"></label>
                    </div>
                    <h2>Buenos precios!<br></h2>
                    <p>Calidad en hamburguesas y papas fritas</p>
                    <a href='#' class="btn">Ir</a>
                </div>
                <div class="home-img">
                    <img src="img/poliburguer.png">
                </div>
            </section>

            <section class="home" id="home">
                <div class="home-text">
                    <h1>Poli Burguer</h1>
                    <div class="star-widget">
                        <input type="radio" name="atencion" value="excelente" id="atencion-excelente">
                        <label for="atencion-excelente" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="buenisimo" id="atencion-buenisimo">
                        <label for="atencion-buenisimo" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="bueno" id="atencion-bueno">
                        <label for="atencion-bueno" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="regular" id="atencion-regular">
                        <label for="atencion-regular" class="fas fa-star"></label>

                        <input type="radio" name="atencion" value="malo" id="atencion-malo">
                        <label for="atencion-malo" class="fas fa-star kkol"></label>
                    </div>
                    <h2>Buenos precios!<br></h2>
                    <p>Calidad en hamburguesas y papas fritas</p>
                    <a href='#' class="btn">Ir</a>
                </div>
                <div class="home-img">
                    <img src="img/poliburguer.png">
                </div>
            </section>
        </div>
    </div>
    <script src='js/user_js/restaurantes.js'></script>
    <!-- btn scroll -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="./scripts/jquery.scrollUp.js"></script>
    <script>
        $(function(){
            $.scrollUp({
                scrollImg: true
            });
        });
    </script>
</body>
</html>
