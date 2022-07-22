<?php

include_once 'navbar.php';
include_once 'head.php';


if (isset($_GET['ruta'])) { //Si variable ruta existe
  switch ($_GET['ruta']) {
    case 'productos':
      include_once 'productos.php';
      break;
    case 'usuarios':
      include_once 'index1.php';
      break;
    case 'modificar':
      include_once 'vistamodificar.php';
      break;
    case 'modificarp':
      include_once 'vistamodificarproducto.php';
      break;
/*     case 'pdfuser':
      include_once 'view/module/pdfusuarios.php';
      break;
    case 'pdfproduct':
      include_once 'view/module/pdfproductos.php';
      break; */
   
  }
} else {
  include_once 'index1.php';
}
