<?php
    require_once './app/models/dateModel.php';

    class InformationController {
        private $model;

        public function __construct() {
            $this->model = new InformationModel();
        }

        function showInformation($tiker){
            $this->model->dateCompany($tiker);
        }
        function addDate() {
            $tiker = $_POST['tiker'];
            $index = $_POST['index'];
            $marketcapt = $_POST['marketcapt'];
            $shares = $_POST['shares'];
            $id = $this->model->insertCompany($tiker, $index, $marketcap, $shares) ;
            header("Location: " .BASE_URL."company"); 
        }
        // realcionar con la nueva BD 

    }