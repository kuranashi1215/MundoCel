<?php

include_once 'view/module/head.php';

<<<<<<< HEAD
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
=======
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
      include_once 'view/module/redireccionShop.php';  
>>>>>>> kura
  }
}

if (isset($_SESSION['login']) and $_SESSION['login'] == true ){

      //  require_once "view/module/loader.php";
        require_once "view/module/Header2.php";
        require_once "view/module/hero.php";
        require_once "view/module/category.php";
        require_once "view/module/products.php";
        require_once "view/module/instagram.php";
      }
      else
      {
        include_once 'view/module/header.php';
        require_once "view/module/hero.php";
        require_once "view/module/category.php";
        require_once "view/module/products.php";
        require_once "view/module/instagram.php";


      }
  
      include_once 'view/module/footer.php';



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
  //   include_once 'view/module/body.php';
  // }
  // include_once 'view/module/footer.php';
?>
  