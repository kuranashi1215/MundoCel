<?php

include_once 'view/module/head.php';

if (isset($_GET['ruta'])){ //Si variable ruta existe
  switch ($_GET['ruta']) {
    case 'logeo':
      include_once 'view/module/redireccion.php';
      break;
  }
}

if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
        require_once "view/module/Header2.php";
        require_once "view/template.php";
        include_once "view/module/view.php";
        include_once 'view/module/footer.php';
      }
      else
      {
        include_once 'view/module/header.php';
        include_once "view/module/view.php";
        include_once 'view/module/footer.php';
      }
  



//  include_once 'view/module/head.php';
//   include_once 'view/module/header.php';



  // if (isset($_GET['ruta'])){ //Si variable ruta existe
  //   switch ($_GET['ruta']) {
  //     case 'login':
  //       include_once 'view/module/login.php';
  //       break;
  //     case 'erase':
  //       include_once 'view/module/erase.php';
  //       break;
  //     default:
  //       include_once 'view/module/presentation.php';
  //       break;
  //   }
  // } else {
  //   include_once 'view/module/view.php';
  // }
  // include_once 'view/module/footer.php';
?>
  