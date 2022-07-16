<?php
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["contraseña"])) {
            $usuario=$_POST["nombre"];
            $contraseña=$_POST["contraseña"];

            $sql=$conexion->query(" insert into user(USER, PASSWORD)values('$usuario', '$contraseña') ");
            if ($sql==1) {
                echo '<div class="alert alert-success">Usuario Registrado Correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">El usuario no ha podido ser registrado :(</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Algunos de los campos estan vacios</div>';
        }

    }
?>