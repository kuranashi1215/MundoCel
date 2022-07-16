<?php
class UserController{
    
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
            }

        } catch(Exception $e){
            echo "Error en el controlador de insercion " . $e->getMessage();
        }

    }// FIN DEL CONTROLADOR DE INSERCION
    public function getSearchAllUser(){
        $respon = false;
        try {
            $objDtoUser = new User();
            $objDaoUser = new UserModel($objDtoUser);
            $respon = $objDaoUser -> mldSearchAllUser()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the 
            controller of show all " . $e->getMessage();
        }
        return $respon;
    }//FIN DE MOSTRAR TODOS

}// END CLASS

//$objCtr = new UserController();
//$objCtr -> getVerifyPass('abrazo','150');

?>