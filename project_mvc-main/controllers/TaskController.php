<?php

include_once 'models/Task.php';

class TaskController {
    private $db;
    private $task;

    public function __construct($db) {
        $this->db = $db;
        $this->task = new Task($db);
    }

    // Método para criar uma nova tarefa
    public function create($taskName, $deadline) {
        $this->task->tarefa = $taskName; // Corrigido: taskName para tarefa
        $this->task->prazo = $deadline; // Corrigido: deadline para prazo

        if($this->task->create()) {
            return "Tarefa criada.";
        } else {
            return "Não foi possível criar a tarefa.";
        }
    }

    // Método para obter detalhes de uma tarefa pelo ID
    public function readOne($taskId) {
        $this->task->idtarefa = $taskId; // Corrigido: taskId para idtarefa
        $this->task->readOne();

        if($this->task->tarefa != null) { // Corrigido: taskName para tarefa
            // Cria um array associativo com os detalhes da tarefa
            $task_arr = array(
                "id" => $this->task->idtarefa, // Corrigido: taskId para idtarefa
                "taskName" => $this->task->tarefa, // Corrigido: taskName para tarefa
                "deadline" => $this->task->prazo // Corrigido: deadline para prazo
            );
            return $task_arr;
        } else {
            return "Tarefa não encontrada.";
        }
    }

    // Método para atualizar os dados de uma tarefa
    public function update($taskId, $taskName, $deadline) {
        $this->task->idtarefa = $taskId; // Corrigido: taskId para idtarefa
        $this->task->tarefa = $taskName; // Corrigido: taskName para tarefa
        $this->task->prazo = $deadline; // Corrigido: deadline para prazo

        if($this->task->update()) {
            return "Tarefa atualizada.";
        } else {
            return "Não foi possível atualizar a tarefa.";
        }
    }

    // Método para excluir uma tarefa pelo ID
    public function delete($taskId) {
        $this->task->idtarefa = $taskId; // Corrigido: taskId para idtarefa

        if($this->task->delete()) {
            return "Tarefa excluída.";
        } else {
            return "Não foi possível excluir a tarefa.";
        }
    }

    // Método para listar todas as tarefas (exemplo adicional)
    public function readAll() {
        $query = "SELECT idtarefa, tarefa, prazo FROM " . $this->task->table_name;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }
}
?>
