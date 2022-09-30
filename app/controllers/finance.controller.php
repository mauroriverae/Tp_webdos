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

    public function showTasks() {
        $companies = $this->model->getAllCompany();
        $this->view->showCompany($companies);
    }

    
 /*    function addTask() {
        // TODO: validar entrada de datos

        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];

        $id = $this->model->insertTask($title, $description, $priority);

        header("Location: " . BASE_URL); 
    }
   
    function deleteTask($id) {
        $this->model->deleteTaskById($id);
        header("Location: " . BASE_URL);
    } */
}
