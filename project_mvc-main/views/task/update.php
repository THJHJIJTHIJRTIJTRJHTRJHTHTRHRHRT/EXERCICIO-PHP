<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando Tarefa</title>
</head>
<body>
    <h1>Atualizando Tarefa</h1>
    <form action="index.php?action=updateTask&id=<?php echo $task['id']; ?>" method="post">
        <label for="taskName">Nome da Tarefa:</label>
        <input type="text" id="taskName" name="taskName" value="<?php echo htmlspecialchars($task['taskName'], ENT_QUOTES, 'UTF-8'); ?>" required>
        <br>
        <label for="deadline">Prazo:</label>
        <input type="date" id="deadline" name="deadline" value="<?php echo htmlspecialchars($task['deadline'], ENT_QUOTES, 'UTF-8'); ?>" required>
        <br>
        <input type="submit" value="Update">
    </form>
    <a href="index.php">Voltar para lista de tarefas</a>
</body>
</html>

