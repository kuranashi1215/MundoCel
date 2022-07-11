
<?php 
$productos = obtenerProductos();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<?php 
//require 'model/conexion.php';
$db = new Database();
$con = $db ->conectar();
$sql = $con->prepare("SELECT id,nombre, precio, descripcion  FROM productoS WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
   <!-- Seccion Productos comienza -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li data-filter=".new-arrivals">Contenido nuevo</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <?php foreach ($resultado as $row) {  ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                            <?php
                                $id = $row['id'];
                                $imagen = "view/img/productos/".$id."/product.jpg";

                                if (!file_exists($imagen)) {
                                    $imagen = "view/img/no.jpg";
                                }
                            ?>    
                            <div class="product__item__pic set-bg" data-setbg="<?php echo $imagen;?>">
                                <span class="label">New</span>  
                            </div>
                            <div class="container">
                            <div id="demo" class="collapse">
                            <?php echo 'nombre: '; echo $row['nombre']; ?>
                            <br>
                            <?php echo 'descripcion: '; echo $row['descripcion']; ?>
                            </div>
                        </div>
                        <?php foreach ($productos as $producto) {  ?>
                            <?php }?>  
                            <button type="button" class="btn btn-primary mt-5" data-toggle="collapse" data-target="#demo">Leer mas</button>
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
                                <h6><?php echo $row['descripcion'] ?></h6>
                                <!-- <a href="shopdetails" class="add-cart">Detalles</a> -->
                                <h5><?php echo number_format($row['precio'], 2, '.', ',');?></h5>
                                <div class="btn-group">
                                </div> 
                        </div>      
                    </div>
            </div> 
        </div>
        <?php } ?>
    </section>
    <!-- Termina Seccion Productos -->