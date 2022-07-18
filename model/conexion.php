<?php
$mysqli = new mysqli("localhost","root","","flexacolor");
class Database {

    private $hostname = "localhost";
    private $database = "julin";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    function conectar()
    {
        try{
        $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; 
        charset=" . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false

        ];
        $pdo = new PDO ($conexion, $this-> username, $this->password, $options);

        return $pdo;
        } catch(PDOException $e){
            echo 'Error conexion' . $e->getMessage();
            exit;
        }

    }
}


    class Conexion{
        private $host;
        private $drive;
        private $base;
        private $user;
        private $pass;
        private $url;
        private $charSet;
        
        /*constructor */
        public function __construct(){
            $this -> host   ="localhost";
            $this -> drive  ="mysql";
            $this -> base   ="julin";
            $this -> user   ="root";
            $this -> pass   ="";
            $this -> url    = $this -> drive . ":host=" 
                            . $this -> host . ";dbname=" 
                            . $this -> base;
            $this -> charSet="UTF8";
        }//END CONSTRUCT
        public function getConect(){
            try {

                $con = new PDO($this -> url, $this -> user, $this -> pass);

            } catch (Exception $e) {
                
                echo "Error al conectarme " . $e->getMessage();

            }//END TRY
            return $con;
        }//END GETCONECT
    }//END CLASS
    //$objCon = new Conexion();
    //$objCon -> getConect();
?>