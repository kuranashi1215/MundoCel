<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<?php 

//require 'model/conexion.php';
require 'model/config.php';
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
                        <div class="product__item">
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
                            <button type="button" class="btn btn-primary mt-5" data-toggle="collapse" data-target="#demo">Leer mas</button>
                            <div id="demo" class="collapse">
                            <?php echo "tipo: "; echo $row['descripcion']; ?>
                            <br>
                            </div>
                            </div>
                            <a href="" class="btn btn-success" onclick="addProducto(<?php echo $id;  ?>, <?php echo $token_tmp ?>)">Agregar</a>
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