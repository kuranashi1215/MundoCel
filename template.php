<?php

include_once 'navbar.php';

if (isset($_GET['ruta'])) { //Si variable ruta existe
  switch ($_GET['ruta']) {
    case 'productos':
      include_once 'productos.php';
      break;
    case 'usuarios':
      include_once 'index1.php';
      break;
   
  }
} else {
  include_once 'navbar.php';
  include_once 'index1.php';
}
