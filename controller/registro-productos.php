<?php
    if (!empty($_POST["btnregistro"])) {

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

            $sql=$conexion->query(" insert into productos(nombre, descripcion, precio, descuento, id_categoria, activo, color, medidas, cantidad)values('$nombre', '$descripcion', $precio, $descuento, $categoria, '$color', '$medidas', '$cantidad', $activo) ");
            if ($sql==1) {
                echo "<script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto Registrado Con Exito',
                    showConfirmButton: false,
                    timer: 1500
                  })
            </script>";
            }else{
                echo "<script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'El Registro No Se ha Podido Guardar',
                    showConfirmButton: false,
                    timer: 1500
                  })
            </script>";
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