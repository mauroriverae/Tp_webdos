<?php

class FinanceModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_finance;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllCompany() {
        $query = $this->db->prepare("SELECT * FROM dbb");
        $query->execute();

        // 3. obtengo los resultados
        $company = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $company;
    }

    function deleteCompnayByname($company) {
       $query = $this->db->prepare('DELETE FROM dbb WHERE company = ?');
       $query->execute([$company]);
   }
    /**
     * Inserta una tarea en la base de datos.
     */
    /* public function insertTask($title, $description, $priority) {
        $query = $this->db->prepare("INSERT INTO tareas (titulo, descripcion, prioridad, finalizada) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $description, $priority, false]);

        return $this->db->lastInsertId();
    } */


    /**
     * Elimina una tarea dado su id.
     */
   /*
 */
}

