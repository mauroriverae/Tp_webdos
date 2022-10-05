<?php
    require_once './app/models/userModel.php';
    require_once './app/views/loginView.php';
    
    class LoginController {
        private $model;
        private $view;

        public function __construct() {
            $this->model = new UserModel();
            $this->view = new LoginView();
        }


        function login(){
            $this->view->showLogin();
        }


        function verfyLogin(){
            if(!empty($_POST['email'])&& !empty($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $user = $this->model->getUser($email);

                if($user && password_verify($password, $user->password)){
                    $this->view->showHome();
                } else{
                    $this->view->showLogin("Acceso denegado");
                }
            }
        }
//me quede 38min
//mañana termino esto y continuo para la comunicacion de las BD







    }