<?php
require_once './app/models/finance.model.php';
require_once './app/views/finance.view.php';

class FinanceController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new FinanceModel();
        $this->view = new FinanceView();
    }

    public function showCompany() {
        $companies = $this->model->getAllCompany();
        $this->view->showCompany($companies);
    }

    public function cTecnology($sector){
        $tecnology = $this->model->FilterCompany($sector);
        $this->view->showTecnology($tecnology);
    }


    public function ShowAbout(){
        echo "Hola este es el about";
    }


    function deleteComapny($company) {
        $this->model->deleteCompnayByname($company);
        header("Location: " . BASE_URL);
    }


    function addCompany() {
        // TODO: validar entrada de datos
        $company = $_POST['company'];
        $sector = $_POST['sector'];
        $tiker = $_POST['tiker'];
      

        $id = $this->model->insertCompany($company, $sector, $tiker) ;

        header("Location: " .BASE_URL); 
    }
   
}
