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
      include_once '';
      break; 
    case 'about':
      include_once 'view/module/about.php';
      break;     
  }
}else {
  require_once "view/module/hero.php";
  require_once "view/module/category.php";
  require_once "view/module/products.php";
  require_once "view/module/instagram.php";
  include_once 'view/module/footer.php';
}

?>
  