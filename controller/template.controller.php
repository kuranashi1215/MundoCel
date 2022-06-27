<?php
session_start();
class Template{

    public function getIntro(){
  

       
        if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
            require_once "view/template.php";
        }else if(isset($_SESSION['Var']) && $_SESSION["Var"] == true){
            require_once "view/module/login.php";
            // unset($_SESSION['Var']);
        }else if(isset($_SESSION['register']) && $_SESSION["register"] == true){
            require_once "view/module/register.php";
        }else if(isset($_SESSION['shopdetails']) && $_SESSION["shopdetails"] == true){
            require_once "view/module/shop-details.php";
        }else{
            require_once "view/template.php";
        }
           

    }

}
?>