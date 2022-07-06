<?php
session_start();
$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}
class Template{

    public function getIntro(){
  

       
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