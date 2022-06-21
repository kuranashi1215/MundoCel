<?php

  include_once 'view/module/head.php';
  include_once 'view/module/header.php';

  if (isset($_GET['ruta'])){ //Si variable ruta existe
    switch ($_GET['ruta']) {
      case 'login':
        include_once 'module/login.php';
        break;
      case 'register':
        include_once 'module/register.php';
        break;
      default:
        include_once 'module/presentation.php';
        break;
    }
  } else {
    include_once 'view/module/view.php';
  }
  include_once 'view/module/footer.php';
?>
  