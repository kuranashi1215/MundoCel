<?php
include_once 'navbar.php';
include 'modelo/conexion.php';
$id = $_GET["id"];
$sql = $conexion->query(" select * from productos where id = $id ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab10eea0d3.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    while ($datos = $sql->fetch_object()) { ?>
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar Productos</h3>
            <?php
                include 'controller/modificar-producto.php';
            ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <textarea class="form-control" style="height: 100px" name="descripcion"><?= $datos->descripcion?></textarea>
          
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">precio</label>
                <input type="number" class="form-control" name="precio" value="<?= $datos->precio?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">descuento</label>
                <input type="number" class="form-control" name="descuento" value="<?= $datos->descuento?>">
            </div>
            <div class="mb-3">
                <label for="floatingTextarea2" class="form-label">categoria</label>
                <input type="text" class="form-control" name="categoria" value="<?= $datos->id_categoria?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">color</label>
                <input type="text" class="form-control" name="color" value="<?= $datos->color?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">medidas</label>
                <input type="text" class="form-control" name="medidas" value="<?= $datos->medidas?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">cantidad</label>
                <input type="number" class="form-control" name="cantidad" value="<?= $datos->cantidad?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">activo</label>
                <input type="number" class="form-control" name="activo" value="<?= $datos->activo?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btnmodifico" value="ok">Modificar</button>
            <a href="productos.php">Ir al inicio</a>

        </form>
    <?php }
    ?>

</body>

</html>