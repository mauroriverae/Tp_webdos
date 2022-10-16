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
        
        function showInformation($tiker){
            $this->authHelper->checkLogged();
            $dates = $this->model->dateCompany($tiker);
            $this->view->showDate($dates, $tiker);
        }

        function addDates(){
            $this->authHelper->checkLogged();   
            $Index = $_POST['index'];
            $MarketCap = $_POST['marketcap'];
            $Shares = $_POST['shares'];
            $Tiker =  strtoupper($_POST['tiker']);
            $this->model->insertDates($Tiker, $Index, $MarketCap, $Shares) ;
            header("Location: " .BASE_URL. "company"); 
        }

        /* Cambiar por join, esta mal asi  */

    }