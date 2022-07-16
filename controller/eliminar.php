<?php
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql=$conexion->query(" delete from user where CODE=$id");
        if ($sql==1) {
            echo '<div class="alert alert-success">usuario eliminado</div>';
        }else {
            echo '<div class="alert alert-danger">Error</div>';
        }
    }
?>