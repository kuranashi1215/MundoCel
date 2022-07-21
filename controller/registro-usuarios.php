<?php
/* include_once '../js.js'; */
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
