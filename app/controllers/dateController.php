<?php
    require_once './app/models/dateModel.php';
    require_once './app/views/dateView.php';

    class InformationController {
        private $model;
        private $view;

        public function __construct() {
            $this->model = new InformationModel();
            $this->view = new DateView();
        }

        function showInformation($tiker){
            $dates = $this->model->dateCompany($tiker);
            $this->view->showDate($dates);
        }


        /* function addDate() {
            $tiker = $_POST['tiker'];
            $index = $_POST['index'];
            $marketcapt = $_POST['marketcapt'];
            $shares = $_POST['shares'];
            $id = $this->model->insertCompany($tiker, $index, $marketcap, $shares) ;
            header("Location: " .BASE_URL."company"); 
        } */
        // realcionar con la nueva BD 

    }