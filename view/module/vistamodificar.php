<?php
include_once 'navbar.php';
include_once 'head.php';
include 'modelo/conexion.php';
$id = $_GET["id"];
$sql = $conexion->query(" select * from user where CODE = $id ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>

<body>
    <?php
    while ($datos = $sql->fetch_object()) { ?>
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar Usuarios</h3>
            <?php
                include 'controller/modificar.php';
            ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->USER?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña" value="<?= $datos->PASSWORD?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
            <a href="index.php">Ir al inicio</a>

        </form>
    <?php }
    ?>

</body>

</html>