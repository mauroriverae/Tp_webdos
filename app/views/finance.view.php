<?php
require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
class FinanceView {
    private $smarty;

    public function __construct() {

        $this->smarty = new Smarty();
    }
    
    function showCompany($companies) {
         $this->smarty->assign("companies", $companies);
         $this->smarty->display('templates/companytable.tpl');
    }
    
    function showTecnology($tecnology){
        $this->smarty->assign("tecnology", $tecnology);
        $this->smarty->display('templates/sectorT.tpl');
    }


    function showHomeLocation(){
        header("location: " .BASE_URL."home");
    }
}

        
