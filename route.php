<?php
require_once './app/controllers/finance.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'company'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$financeController = new FinanceController();


// tabla de ruteo
switch ($params[0]) {
    case 'company':
        $financeController->showCompany();
        break;
   case 'about':
        $financeController->ShowAbout();
        break;
   /*  case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $financeController->deleteTask($id);
        break; */
    default:
        echo('404 Page not found');
        break;
}
