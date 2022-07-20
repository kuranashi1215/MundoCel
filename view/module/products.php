<?php
$productos = obtenerProductos();
?>

<?php foreach ($productos as $producto) { ?>


<div class="container  justify-content-center mt-50 mb-50">
    <div class="row">
        <div class="col-md-10">

            <div class="card card-body">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0">

                        <?php

                        $imagen = "view/img/productos/" . $producto->id . "/product.jpg";
                        if (!file_exists($imagen)) {
                            $imagen = "view/img/no.jpg";
                        }

                        ?>
                        <br>
                        <img src="<?php echo $imagen; ?>" width="150" height="150" alt="">

                    </div>

                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold">
                            <a data-abc="true"><b><?php echo $producto->nombre ?></b></a>
                        </h6>

                        <br>
                        <p class="mb-3"><?php echo $producto->descripcion ?></p>

                    </div>

                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold">$<?php echo number_format($producto->precio, 2) ?></h3>
                        <br>
                        <br>
                        <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                            <form action="funciones/eliminar_del_carrito.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <span class="button is-success">
                                    <i class="fa fa-check"></i>&nbsp;En el carrito
                                </span>
                                <button class="button is-danger">
                                    <i class="fa fa-trash-o"></i>&nbsp;Quitar
                                </button>
                            </form>
                        <?php } else { ?>
                            <form action="funciones/agregar_al_carrito.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="button is-primary">
                                    <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                                </button>
                            </form>
                        <?php } ?>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
    <br>
    <?php } ?>