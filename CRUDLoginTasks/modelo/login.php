<?php

include_once 'conexion.php';

class Login extends Conexion {
   
  //private $usuario, $contra;
  
  public function conSelect($usuario){
    $sql= 'SELECT * FROM LOGINDB WHERE USUARIO="'.$usuario.'"'; 
    $consulta= $this->conectar()->query($sql);
    return $consulta;
  }
  
  public function validarForm(){
  
    if(isset($_POST['submitBtnLogin'])){  
      if(empty($_POST['usuario']) && empty($_POST['password'])){
        echo '<script>alert("Fill in the blanks");</script>';
      }else{
        $usuario= $_POST['usuario'];
        $contra= $_POST['password'];
        $this->validarLogin($usuario,$contra);
      }
    }
  }
  
  public function validarLogin($usuario, $contra){
    $contador=0;
    $sqlSel= $this->conSelect($usuario);
    
    while($row= $sqlSel->fetch(PDO::FETCH_ASSOC)){
    
      if(password_verify($contra, $row['PASSWORD'])){
        $contador++;
      } 
      
      if($contador>0){
        session_start();
        $_SESSION["Usuario"] = $usuario;
        header('location: ../access/index.php');
         
      } else { 
        echo '<script>alert("Incorrect user or password");</script>';
      }
    }
  }
}

?>