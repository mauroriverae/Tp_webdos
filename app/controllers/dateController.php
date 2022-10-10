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
        // realcionar con la nueva BD 

    }