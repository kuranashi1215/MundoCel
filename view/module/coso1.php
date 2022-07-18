<?php
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Productos</h2>
    </div>
</div>
<?php foreach ($productos as $producto) { ?>
    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                        <?php echo $producto->nombre ?>
                    </p>
                </header>

                <div class="card-content">
                    <div class="content">
                        <!-- <div class="album py-5 bg-light" class="d-block w-100"> -->

                        <?php

                        $imagen = "view/img/productos/" . $producto->id . "/product.jpg";
                        if (!file_exists($imagen)) {
                            $imagen = "view/img/no.jpg";
                        }

                        ?>
                        <br>
                        <img src="<?php echo $imagen; ?> " class="d-block w-10" alt="image" height="300" width="300" style="border: solid; border-color:#8A8A8A" ;>
                        <?php echo $producto->descripcion ?>
                    
                        <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
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
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>