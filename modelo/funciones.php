<?php

class funciones{

    public function eliminarProducto($conexion) 
    {
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
    }

    public function eliminarUsuario($conexion)
    {
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
    }
    
    public function modificarProducto($conexion, $id)
    {
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
    }

    public function modificarUsuario($conexion, $id)
    {
        if (!empty($_POST["btnmodificar"])) {

            if (!empty($_POST["nombre"]) and !empty($_POST["contraseña"])) {
            $usuario=$_POST["nombre"];
            $contraseña=$_POST["contraseña"];
            $sql=$conexion->query("update user set USER='$usuario', PASSWORD='$contraseña' where CODE=$id");
            if ($sql==1) {
                header('location:index.php');
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
    }

    public function registroproducto($conexion)
    {
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
    }

    public function registrousuario($conexion)
    {
        if (!empty($_POST["btnregistrar"])) {
            if (!empty($_POST["nombre"]) and !empty($_POST["contraseña"])) {
                $usuario=$_POST["nombre"];
                $contraseña=$_POST["contraseña"];
    
                $sql=$conexion->query(" insert into user(USER, PASSWORD)values('$usuario', '$contraseña') ");
                if ($sql==1) {
    
                    echo "<script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Usuario Registrado Con Exito',
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
    
    }

}

?>