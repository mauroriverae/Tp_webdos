<?php
    class InformationModel {

        private $db;
    
        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_finance;charset=utf8', 'root', '');
        }

        function dateCompany($tiker){
            echo $tiker;
           /*  $query = $this->db->prepare('SELECT * FROM dbb WHERE sector = ?');
            $query->execute([$tiker]); 
            $companyDate = $query->fetchall(PDO::FETCH_OBJ);
            return $companyDate; */
            //hacer algo asi pero para JOIN
        }
    }