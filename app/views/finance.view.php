<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
class FinanceView {
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty();
    }
    function showCompany($companies) {
        include './templates/header.php';   
         $this->smarty->assign("companies", $companies);
        $this->smarty->display('templates/companytable.tpl');
        include './templates/footer.php';
    }
}

        
