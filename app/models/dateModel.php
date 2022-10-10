<?php
    class InformationModel {

        private $db;
    
        public function __construct() {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=finance;charset=utf8', 'root', '');
        }

        function dateCompany($tiker){
            $query = $this->db->prepare('SELECT * FROM dates WHERE  Tiker = ?');
            $query->execute([$tiker]); 
            $companyDate = $query->fetchall(PDO::FETCH_OBJ);
 
            return $companyDate;
            //hacer algo asi pero para JOIN
        }
        
         

        
        /* function insertCompany($tiker, $index, $marketcap, $shares) {
            $query = $this->db->prepare("INSERT INTO date (tiker, index, merketcap, shares)  VALUES (?, ?, ?, ?)");
            $query->execute([$tiker, $index, $marketcap, $shares]);
            return $this->db->lastInsertId();
        } */
    
    }