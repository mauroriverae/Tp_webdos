<?php
require_once 'libs/smarty-master/libs/Smarty.class.php';
class FinanceView {
    private $smarty;
    public function __construct() {
        $this->smarty = new Smarty();
    }
    function showCompany($companies) {
        include './templates/header.php';    
       $this->smarty->assing("companies", $companies);
       $this->smarty->display('companytable.tpl');
        
    /*     echo '<tr>';
        foreach ($companies as $company) {
           echo "   <tr>$company->company</tr>
                    <tr>$company->sector</tr>
                    <tr>$company->tiker</tr>
           ";
        }
        echo "</tr>
            </tbody>
        </table> "; */
    
        include './templates/footer.php';
    }
}

        
