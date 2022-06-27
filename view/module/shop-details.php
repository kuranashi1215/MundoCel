<?php

require 'model/config.php';
$db = new Conexion();
$con = $db ->getConect();

$sql = $con->prepare("SELECT count(codigoproducto) FROM productos WHERE codigoproducto=? AND codigoproducto = codigoproducto");
$sql->execute(["codigoproducto"]);
if ($sql->fetchColumn() > 0) {
    
    $sql = $con->prepare("SELECT codigoproducto,  descripcion, precio, descuento FROM productos WHERE codigoproducto=? AND codigoproducto = codigoproducto LIMIT 1");
    $sql->execute(["codigoproducto"]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    $codigoproducto = $row['codigoproducto'];
    $descripcion = $row['descripcion'];
    $precio = $row['precio'];
    $descuento = $row['descuento'];
    $precio_desc = $precio - (($precio * $descuento) / 100);
    $dir_images = 'images/productos/'.$id.'/';

    $rutaimg = $dir_images . 'principal.jpg';

    if (!file_exists($rutaimg)) {
        $rutaimg = 'img/no.jpg';
    }
    $imagenes = array();
    $dir = dir($dir_images);

    while (($archivo = $dir->read()) != false) {
        if($archivo != 'principal.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpeg'))){
            $imagenes[] =  $dir_images . $archivo;
        }
        $dir->close();
    }
 }
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

// if ($id == '' || $token == '' ){

//     echo 'Error al procesar la peticion';
        // exit;
// } else {
//     $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

//     if ($token == $token_tmp) {
//     } else {
//         echo 'Error al procesar la peticion';
//         exit;
//     }
// }
      

?>


<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MundoCel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="view/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/style.css" type="text/css">
</head>

<body>
    <!-- Cargador Pagina -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->


    <!-- Offcanvas Menu Comienza -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Iniciar Sesion</a>
                <a href="#">Registrarse</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>COL<i class="arrow_carrot-down"></i></span>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>
    <!-- Offcanvas Menu termina -->

    <!-- Header Comienza -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>El mundo en tu celu</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Iniciar Sesion</a>
                                <a href="#">Registrarse</a>
                            </div>
                            <div class="header__top__hover">
                                <span>COL</i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Inicio</a></li>
                            <li><a href="#  ">Productos</a></li>
                            <li><a href="#">Paginas</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">Acerca de</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Categorias</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="shopping-cart.html"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>

    <!-- Header Section End -->

    <!-- contenido -->
    <main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1">


            <div id="carouselimages" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselimages" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselimages" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselimages" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo $rutaimg;  ?>" class="d-block w-100">
                </div>
                <?php foreach ($imagenes as $img) { ?>
                <div class="carousel-item ">
                    <img src="<?php echo $img;  ?>" class="d-block w-100">
                </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselimages" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

            
            </div>
            <div class="col-md-6 order-md-2">
                <h2><?php echo $codigoproducto; ?></h2>

                <?php if ($descuento > 0 ) { ?>
                
                <p><del><?php echo MONEDA . number_format($precio, 2, '.', ','); ?></del></p>
                <h2><?php echo MONEDA . number_format($precio_tmp, 2, '.', ','); ?>
                <small class="text-success"><?php echo $descuento; ?>% descuento </small>
                </h2>

                <?php } else { ?>
                

                <h2><?php echo MONEDA . number_format($precio, 2, '.', ','); ?></h2>

                <?php  } ?>
                <p class="lead">
                    <?php echo $descripcion ?>
                </p>
                <div class="d-grid gap-3 col-10 mx-auto">
                    <button class="btn btn-primary" type="button">Comprar ahora</button>
                    <button class="btn btn-outline-primary" type="button">Agregar al Carrito</button>

                </div>
            </div>
        </div>
    </div>
    </main>


    <!-- fin Contenido -->

 
    <!-- Footer Section Begin -->
    <!-- <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, sequi!.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Productos</a></li>
                            <li><a href="#">Mas vendidos</a></li>
                            <li><a href="#">Multimedia</a></li>
                            <li><a href="#">Accesorios</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contactanos</a></li>
                            <li><a href="#">Metodos de pago</a></li>
                            <li><a href="#">Envios</a></li>
                            <li><a href="#">Devoluciones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Lorem, ipsum.</h6>
                        <div class="footer__newslatter">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ullam.</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <!-- <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div> -->
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>