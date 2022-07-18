<?php
// CONECTA LA DB Y EXTRAE EL CAMPO ID DE LA TABLA PRODUCTOS
require 'model/conexion.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT id,nombre,precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

