<?php

class Task {
    private $conn;
    public $table_name = "tarefa";

    public $idtarefa;
    public $tarefa;
    public $prazo;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create - Criar uma nova tarefa
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (tarefa, prazo) VALUES (:tarefa, :prazo)";
        $stmt = $this->conn->prepare($query);

        // Sanitize inputs
        $this->tarefa = htmlspecialchars(strip_tags($this->tarefa));
        $this->prazo = htmlspecialchars(strip_tags($this->prazo));

        // Bind parameters
        $stmt->bindParam(':tarefa', $this->tarefa);
        $stmt->bindParam(':prazo', $this->prazo);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Read - Obter detalhes de uma tarefa pelo ID
    public function readOne() {
        $query = "SELECT tarefa, prazo FROM " . $this->table_name . " WHERE idtarefa = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->idtarefa);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->tarefa = $row['tarefa'];
        $this->prazo = $row['prazo'];
    }

    // Update - Atualizar os dados de uma tarefa
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET tarefa = :tarefa, prazo = :prazo WHERE idtarefa = :idtarefa";
        $stmt = $this->conn->prepare($query);

        // Sanitize inputs
        $this->idtarefa = htmlspecialchars(strip_tags($this->idtarefa));
        $this->tarefa = htmlspecialchars(strip_tags($this->tarefa));
        $this->prazo = htmlspecialchars(strip_tags($this->prazo));

        // Bind parameters
        $stmt->bindParam(':idtarefa', $this->idtarefa);
        $stmt->bindParam(':tarefa', $this->tarefa);
        $stmt->bindParam(':prazo', $this->prazo);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete - Excluir uma tarefa pelo ID
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE idtarefa = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->idtarefa);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
