<?php

// SE INICIA LA SESION

session_start();

// CREACION DE LA CLASE TEMPLATE

class Template{

    public function getIntro(){
  
        // SI LA SESSION LOGIN ES = TRUE LLEVEME A LA VISTA PRINCIPAL
        // EN DONDE SE CAMBIARA EN LA SECCION DEL HEADER EL BOTON DE CERRAR SESION
       
        if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
            require_once "view/template.php";
        }else if(isset($_SESSION['Var']) && $_SESSION["Var"] == true){
            require_once "view/module/login.php";
        }else if(isset($_SESSION['register']) && $_SESSION["register"] == true){
            require_once "view/module/register.php";
        }else{
            require_once "view/template.php";
        }
           
    }

}
?>