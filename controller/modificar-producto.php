<?php
if (!empty($_POST["btnmodifico"])) {
    
    if (!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"]) and !empty($_POST["descuento"]) and !empty($_POST["categoria"]) and !empty($_POST["color"]) and !empty($_POST["medidas"]) and !empty($_POST["cantidad"]) and !empty($_POST["activo"])) {

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
            header('location:index.php?ruta=productos');
        }else{
            echo '<div class="alert alert-danger">Ha ocurrido un error al modificar los datos del usuario :(</div>';
        }
    }else{
        echo "<script>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Algunos Campos Estan Vacios',
            showConfirmButton: false,
            timer: 1500
          })
    </script>";
    }
}
?>