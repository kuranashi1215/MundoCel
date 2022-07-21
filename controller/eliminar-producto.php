<?php
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql=$conexion->query(" delete from productos where id=$id");
        if ($sql==1) {
            echo "<script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Producto Eliminado Con Exito',
                showConfirmButton: false,
                timer: 1500
              })
        </script>";
        }else {
            echo "<script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Error Al Eliminar El Producto',
                showConfirmButton: false,
                timer: 1500
              })
        </script>";
        }
    }
?>