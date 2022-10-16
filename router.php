<?php
require_once './app/controllers/finance.controller.php';
require_once './app/controllers/LoginController.php';
require_once './app/controllers/dateController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'login'; 
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}


$params = explode('/', $action);


$financeController = new FinanceController();
$loginController = new LoginController();
$infoController = new InformationController();

switch ($params[0]) {
    case 'logout':
        $loginController->logOut();
        break;
    case 'verify':
        $loginController->verfyLogin();
        break;
    case 'login':
        $loginController->login();
        break;
    case 'company':
        $financeController->showCompany();
        break;
    case 'add':
        $financeController->addCompany();
        break;
    case 'addDates':
        $infoController->addDates();
        break;
    case 'delete':
        $company = $params[1];
        $financeController->deleteComapny($company);
        break;
    case 'deleteDates':
        $tiker = $params[1];
        $infoController->deleteDates($tiker);
        break;
    case 'modify':
        $company = $params[1];
        $financeController->modifyCompany($company);
        break;
    case 'update':
        $financeController->update();
        break;
    case 'sector':
        if($params[1]== []){
            $financeController->showCompany();
        }else{
            $sector = $params[1];
            $financeController->cTecnology($sector);
            break;
        }
    case 'information':
        $tiker = $params[1];
        $infoController->showInformation($tiker);
        break;
    default:
        header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
        break;
}
