<?php

include_once 'view/module/head.php';
require_once "view/module/header.php";

if (isset($_GET['ruta'])){ //Si variable ruta existe
  switch ($_GET['ruta']) {
    case 'logeo':
      include_once 'view/module/redireccion.php';
      break;
    case 'contact':
      include_once 'view/module/contact.php';
      break;
    case 'register':
      include_once 'view/module/redireccionR.php';
      break;
    case 'shopdetails':
      include_once 'view/module/shopdetails.php';
      break;  
    case 'inicio':
      include_once 'index.php';
      include_once 'arranque.php';
      break; 
    case 'about':
      include_once 'view/module/about.php';
      break;     
    case 'carrito':
      include_once 'view/module/ver_carrito.php';
      break;     
    case 'productos':
      include_once 'view/module/products.php';
      break; 
    case 'categoria':
      include_once 'view/module/category.php';
      break;      
    case 'cerrar':
      include_once 'view/module/cerrarsesion.php';
      break;  
    case 'coso':
      include_once 'view/module/coso.php';
      break;  
  }
}else {
  include_once 'arranque.php';
}

?>
  