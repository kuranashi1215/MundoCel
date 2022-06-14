<?php
session_start();
require_once "view/template.php";
class Template{
    public function getIntro(){
        
        if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
            require_once "view/template.php";
        }else{
            require_once "view/module/login.php";
        }

    }
}
?>