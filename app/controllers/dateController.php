<?php
    require_once './app/models/dateModel.php';
    require_once './app/views/dateView.php';
    require_once 'Helpers/authHelper.php';

    class InformationController {
        private $model;
        private $view;
        private $authHelper;


        public function __construct() {
            $this->model = new InformationModel();
            $this->view = new DateView();
            $this->authHelper = new AuthHelper();
        }
        //conectar para hace consultas multitabla
        function showInformation($tiker){
            $this->authHelper->checkLogged();
            $dates = $this->model->dateCompany($tiker);
            $this->view->showDate($dates);
        }


        /* Cambiar por join, esta mal asi  */

    }