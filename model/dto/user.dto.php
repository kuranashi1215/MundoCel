<?php

    class User{
        private $code;
        private $user;
        private $password;



        /*GETTERS*/
        public function getCode(){
            return $this->code;
        }
        public function getUser(){
            return $this->user;
        }
        public function getPassword(){
            return $this->password;
        }
        /*SETTING */
        public function setCode ( $code ){
            $this -> code = $code;
        }
        public function setUser ( $user ){
            $this -> user = $user;
        }
        public function setPassword ( $password ){
            $this -> password = $password;
        }
    }

?>