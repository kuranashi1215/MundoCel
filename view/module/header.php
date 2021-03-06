    <!-- Cargador Pagina -->
    <!-- <div id="preloder"> -->
    <!-- <div class="loader"></div> -->
    <!-- </div> -->
    <!-- Offcanvas Menu Comienza -->
    <?php
    // require 'controller/carrito.controller.php';
    // require 'clases/carrito.php';
    ?>
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="view/module/login.php">Iniciar Sesion</a>
                <?php
                if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
                    echo "<a href='logout'>Cerrar Sesion</a>";               
                    }else{
                    // header_remove();
                    echo "<a href='logeo'>Iniciar Sesion</a>";
                    echo "<a href='register'>Register</a>";
                    }
                    
                ?>
            </div>
            <div class="offcanvas__top__hover">
                <span>COL<i class="arrow_carrot-down"></i></span>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="index.php" class="search-switch"><img src="../img/logo1.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">Carrito</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p></p>
        </div>
    </div>
  
    <!-- Offcanvas Menu termina -->

    <!-- Header Comienza -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">

                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
        
                            <?php
                               if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
                                echo "<a href='cerrar'>Cerrar Sesion</a>";                    
                                }else{
                                    echo "<a href='logeo'>Iniciar Sesion</a>";
                                    echo "<a href='register'>Register</a>";
                                }

                            ?>
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
                        <a href="inicio"><img src="view/img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="inicio">Inicio</a></li>
                            <li><a href="productos">Productos</a></li>
                            <li><a href="about">Acerca</a></li>
                            <li><a href="categoria">Categorias</a></li>
                            <li><a href="contact">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="carrito" class="button is-success">
                            <strong>Ver carrito <?php
                                                include_once "funciones/funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                        <div class="price"></div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header termina-->