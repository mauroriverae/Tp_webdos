<?php
    require_once 'libs/smarty-4.2.1/libs/Smarty.class.php';
    class DateView {
        private $smarty;
        public function __construct() {
            $this->smarty = new Smarty();
        } 

        function showDate($dates) {
            
            $this->smarty->assign("dates", $dates);
            $this->smarty->display('templates/date.tpl');
        }

    }