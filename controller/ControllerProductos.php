<?php
// require '../../model/config.php';
// require '../../model/conexion.php';
require 'model/conexion.php';
$db = new Database();
$con = $db->conectar();
$sql = $con->prepare("SELECT id,nombre,precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>