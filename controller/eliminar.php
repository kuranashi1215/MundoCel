<?php
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql=$conexion->query(" delete from user where CODE=$id");
        if ($sql==1) {
            echo "<script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Usuario Eliminado Con Exito',
                showConfirmButton: false,
                timer: 1500
              })
        </script>";
        }else {
            echo "<script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Error Al Eliminar El Registro',
                showConfirmButton: false,
                timer: 1500
              })
        </script>";
        }
    }
?>