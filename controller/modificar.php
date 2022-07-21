<?php
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
?>