<?php
require_once './app/controllers/finance.controller.php';
require_once './app/controllers/LoginController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'company'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);


$financeController = new FinanceController();
$loginController = new LoginController();

switch ($params[0]) {
    case 'verify':
        $loginController->verfyLogin();
        break;
    case 'login':
        $loginController->login();
        break;
    case 'company':
        $financeController->showCompany();
        break;
   case 'about':
        $financeController->ShowAbout();
        break;
    case 'add':
        $financeController->addCompany();
        break;
    case 'delete':
        $company = $params[1];
        $financeController->deleteComapny($company);
        break;
    case 'sector':
        $sector = $params[1];
        $financeController->cTecnology($sector);
        break;
    default:
        echo('404 Page not found');
        break;
}
