<?php
class UserController{
    // Se crea un getVerifyPass para user y password en donde se extrae y se verifica la informacion del usuario

    public function getVerifyPass($user, $pass){

        try{

            $objDtoUser = new User();
            $objDtoUser -> setUser($user);
            $objDtoUser -> setPassword($pass);

            $objDaoUser = new UserModel($objDtoUser);

            if (gettype($objDaoUser -> getQueryLogin() -> fetch()) == 'boolean'){
                
            }else{
                $_SESSION['login'] = true;
                header('location: index.php');
            }
            
        } catch(Exception $e){
            echo "Error on the creation of the controller";
        }
    }
    public function setInsertUser($user, $pass){
        try{
            $objDtoUser = new User();
            $objDtoUser -> setUser($user);
            $objDtoUser -> setPassword($pass);

            $objDaoUser = new UserModel($objDtoUser);

            if ($objDaoUser -> mldInsertUsuario()){
                $_SESSION['login'] = true;
                header('location: index.php');
            }

        } catch(Exception $e){
            echo "Error en el controlador de insercion " . $e->getMessage();
        }

    }// FIN DEL CONTROLADOR DE INSERCION

}// END CLASS


?>