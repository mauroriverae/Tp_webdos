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

    public function cTecnology(){
        $sector = $_GET['name'];  
        echo $sector;
       /*  $companies = $this->model->FilterCompany($sector); */
    }
    public function ShowAbout(){
        echo "Hola este es el about";
    }
    function deleteComapny($company) {
        $this->model->deleteCompnayByname($company);
        header("Location: " . BASE_URL);
    }
 /*    function addTask() {
        // TODO: validar entrada de datos

        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];

        $id = $this->model->insertTask($title, $description, $priority);

        header("Location: " . BASE_URL); 
    }
   
     */
}
