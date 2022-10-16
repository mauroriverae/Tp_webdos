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
        
        function insertDates($tiker, $Index, $MarketCap, $Shares) {
            $query = $this->db->prepare("INSERT INTO dates (tiker, Indexs, MarketCap, Shares) VALUES (?, ?, ?, ?)");
            $query->execute([$tiker, $Index, $MarketCap, $Shares]);
            return $this->db->lastInsertId();
        }
        function deleteDate($tiker){
            $query = $this->db->prepare('DELETE FROM dates WHERE Tiker = ?');
            $query->execute([$tiker]);
        }
    
    }