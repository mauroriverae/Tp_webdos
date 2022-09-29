<?php

class TaskModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_finance;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAllTasks() {
        $query = $this->db->prepare("SELECT * FROM dbb");
        $query->execute();

        // 3. obtengo los resultados
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $tasks;
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
   /*  function deleteTaskById($id) {
        $query = $this->db->prepare('DELETE FROM tareas WHERE id_tarea = ?');
        $query->execute([$id]);
    }
 */
}

