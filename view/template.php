<?php

/*
⡆⣐⢕⢕⢕⢕⢕⢕⢕⢕⠅⢗⢕⢕⢕⢕⢕⢕⢕⠕⠕⢕⢕⢕⢕⢕⢕⢕⢕⢕
⢐⢕⢕⢕⢕⢕⣕⢕⢕⠕⠁⢕⢕⢕⢕⢕⢕⢕⢕⠅⡄⢕⢕⢕⢕⢕⢕⢕⢕⢕
⢕⢕⢕⢕⢕⠅⢗⢕⠕⣠⠄⣗⢕⢕⠕⢕⢕⢕⠕⢠⣿⠐⢕⢕⢕⠑⢕⢕⠵⢕
⢕⢕⢕⢕⠁⢜⠕⢁⣴⣿⡇⢓⢕⢵⢐⢕⢕⠕⢁⣾⢿⣧⠑⢕⢕⠄⢑⢕⠅⢕
⢕⢕⠵⢁⠔⢁⣤⣤⣶⣶⣶⡐⣕⢽⠐⢕⠕⣡⣾⣶⣶⣶⣤⡁⢓⢕⠄⢑⢅⢑
⠍⣧⠄⣶⣾⣿⣿⣿⣿⣿⣿⣷⣔⢕⢄⢡⣾⣿⣿⣿⣿⣿⣿⣿⣦⡑⢕⢤⠱⢐
⢠⢕⠅⣾⣿⠋⢿⣿⣿⣿⠉⣿⣿⣷⣦⣶⣽⣿⣿⠈⣿⣿⣿⣿⠏⢹⣷⣷⡅⢐
⣔⢕⢥⢻⣿⡀⠈⠛⠛⠁⢠⣿⣿⣿⣿⣿⣿⣿⣿⡀⠈⠛⠛⠁⠄⣼⣿⣿⡇⢔
⢕⢕⢽⢸⢟⢟⢖⢖⢤⣶⡟⢻⣿⡿⠻⣿⣿⡟⢀⣿⣦⢤⢤⢔⢞⢿⢿⣿⠁⢕
⢕⢕⠅⣐⢕⢕⢕⢕⢕⣿⣿⡄⠛⢀⣦⠈⠛⢁⣼⣿⢗⢕⢕⢕⢕⢕⢕⡏⣘⢕
⢕⢕⠅⢓⣕⣕⣕⣕⣵⣿⣿⣿⣾⣿⣿⣿⣿⣿⣿⣿⣷⣕⢕⢕⢕⢕⡵⢀⢕⢕
⢑⢕⠃⡈⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢃⢕⢕⢕
⣆⢕⠄⢱⣄⠛⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⢁⢕⢕⠕⢁
⣿⣦⡀⣿⣿⣷⣶⣬⣍⣛⣛⣛⡛⠿⠿⠿⠛⠛⢛⣛⣉⣭⣤⣂⢜⠕⢑⣡⣴⣿
*/

// CARGAR SIEMPRE LA CABECERA Y EL NAVBAR

include_once 'view/module/head.php';
include_once 'view/module/header.php';

if (isset($_GET['ruta'])){ //Si variable ruta existe
  switch ($_GET['ruta']) {
    case 'logeo': #EN CASO DE QUE SEA LOGEO REDIRECCIONEME A:
      include_once 'view/module/redireccion.php';
      break;
    case 'contact': #EN CASO DE QUE SEA CONTACT REDIRECCIONEME A:
      include_once 'view/module/contact.php';
      break;
    case 'register': #EN CASO DE QUE SEA REGISTER REDIRECCIONEME A:
      include_once 'view/module/redireccionR.php';
      break;
    case 'shopdetails': #EN CASO DE QUE SEA SHOPDETAILS REDIRECCIONEME A:
      include_once 'view/module/shopdetails.php';
      break;  
    case 'inicio': #EN CASO DE QUE SEA INICIO REDIRECCIONEME A:
      include_once 'index.php';
      include_once 'arranque.php';
      break; 
    case 'about': #EN CASO DE QUE SEA ABOUT REDIRECCIONEME A:
      include_once 'view/module/about.php';
      break;     
    case 'carrito': #EN CASO DE QUE SEA CARRITO REDIRECCIONEME A:
      include_once 'view/module/ver_carrito.php';
      break;     
    case 'productos': #EN CASO DE QUE SEA PRODUCTOS REDIRECCIONEME A:
      include_once 'view/module/products.php';
      break; 
    case 'categoria': #EN CASO DE QUE SEA CATEGORIA REDIRECCIONEME A:
      include_once 'view/module/category.php';
      break;      
    case 'cerrar': #EN CASO DE QUE SEA CERRAR REDIRECCIONEME A:
      include_once 'view/module/cerrarsesion.php';
      break;   
  }
}else {
  include_once 'arranque.php';
}

?>
  