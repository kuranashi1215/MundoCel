<?php
if (!empty($_POST["btnmodifico"])) {
    $nombre=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $precio=$_POST["precio"];
    $descuento=$_POST["descuento"];
    $categoria=$_POST["categoria"];
    $color=$_POST["color"];
    $medidas=$_POST["medidas"];
    $cantidad=$_POST["cantidad"];
    $activo=$_POST["activo"];
    
    $sql=$conexion->query("update productos set nombre='$nombre', descripcion='$descripcion', precio=$precio, descuento=$descuento, id_categoria=$categoria, activo=$activo, color='$color', medidas='$medidas', cantidad='$cantidad' where id=$id");
    if ($sql==1) {
        header('location:productos.php');
    }else{
        echo '<div class="alert alert-danger">Ha ocurrido un error al modificar los datos del usuario :(</div>';
    } 
}
?>