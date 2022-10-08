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
        function logOut(){
            session_start();
            session_destroy();
            $this->view->showLogin("Sesion cerrada con exito");
        }


        function verfyLogin(){
            if(!empty($_POST['email'])&& !empty($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $user = $this->model->getUser($email);

                if($user && password_verify($password, $user->password)){
                    session_start();
                    $_SESSION['email'] = $email;
                    $this->view->showHome();
                } else{
                    $this->view->showLogin("Acceso denegado");
                }
            }
        }
        

    }