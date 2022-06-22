
<?php 

// require 'model/conexion.php';
require 'model/config.php';
$db = new Conexion();
$con = $db ->getConect();

$sql = $con->prepare("SELECT codigoproducto,  descripcion, precio FROM productos WHERE codigoproducto = codigoproducto");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

   <!-- Seccion Productos comienza -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Mas comprados</li>
                        <li data-filter=".new-arrivals">Contenido nuevo</li>
                        <li data-filter=".hot-sales">Ventas ardientes</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <?php foreach ($resultado as $row) {  ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <?php
                                $id = $row['codigoproducto'];
                                $imagen = "view/img/productos/".$id."/product.jpg";

                                if (!file_exists($imagen)) {
                                    $imagen = "view/img/no.jpg";
                                }
                            ?>    
                            <div class="product__item__pic set-bg" data-setbg="<?php echo $imagen;?>">
                            </div>
                            <a href="#" class="btn btn-primary">detalles</a>
                            <div class="product__item__text">
                                <h6><?php echo $row['descripcion'] ?></h6>
                                <!-- <a href="shopdetails" class="add-cart">Detalles</a> -->
                                <h5><?php echo number_format($row['precio'], 2, '.', ',');?></h5>
                                <div class="btn-group">
                                 
                                </div>
                            </div>   
                        </div>      
                    </div>
                <?php }?>  
            </div>
        </div>
    </section>
    <!-- Termina Seccion Productos -->