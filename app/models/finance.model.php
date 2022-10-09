<?php

class FinanceModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_finance;charset=utf8', 'root', '');
    }

    public function getAllCompany() {
        $query = $this->db->prepare("SELECT * FROM dbb");
        $query->execute();
        $company = $query->fetchAll(PDO::FETCH_OBJ); 
        return $company;
    }

    function deleteCompnayByname($company) {
       $query = $this->db->prepare('DELETE FROM dbb WHERE company = ?');
       $query->execute([$company]);
   }

    function FilterCompany($sector){
        $query = $this->db->prepare('SELECT * FROM dbb WHERE sector = ?');
        $query->execute([$sector]); 
        $companySector = $query->fetchall(PDO::FETCH_OBJ);
        return $companySector;
    }
   

    function insertCompany($company , $sector , $tiker) {
        $query = $this->db->prepare("INSERT INTO dbb (company, sector, tiker) VALUES (?, ?, ?)");
        $query->execute([$company, $sector, $tiker]);
        return $this->db->lastInsertId();
    }
}

