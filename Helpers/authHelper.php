<?php
    class AuthHelper {

        public function __construct() {
        }

        function checkLogged(){
            session_start();
            if(!isset($_SESSION['email'])){
                header("Location".BASE_URL."login");
            }
            var_dump($_SESSION);
        
        }
    }