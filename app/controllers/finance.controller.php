<?php
require_once './app/models/finance.model.php';
require_once './app/views/finance.view.php';
require_once 'Helpers/authHelper.php';

class FinanceController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new FinanceModel();
        $this->view = new FinanceView();
        $this->authHelper = new AuthHelper();
    }
    

    function showCompany(){
        $this->authHelper->checkLogged();
        $companies = $this->model->getAllCompany();
        $this->view->showCompany($companies);
    }

    function cTecnology($sector){
        $this->authHelper->checkLogged();
        $tecnology = $this->model->FilterCompany($sector);
        $this->view->showTecnology($tecnology);
    }

    function deleteComapny($company) {
        $this->authHelper->checkLogged();
        $this->model->deleteCompnayByname($company);
        header("Location: " . BASE_URL."company");
    }

    function addCompany() {
        $this->authHelper->checkLogged();   
        $company = $_POST['company'];
        $sector = $_POST['sector'];
        $tiker = $_POST['tiker'];
        $id = $this->model->insertCompany($company, $sector, $tiker) ;
        header("Location: " .BASE_URL. "company"); 
    }
    
    function modifyCompany(){
        $this->authHelper->checkLogged();
        $this->updateCompany($company , $sector , $tiker);
        header("Location: " . BASE_URL."company");

    }
}
