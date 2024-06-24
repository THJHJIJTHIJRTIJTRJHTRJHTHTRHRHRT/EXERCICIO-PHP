<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando nova Tarefa</title>
</head>
<body>
    <h1>Criando nova Tarefa</h1>
    <form action="index.php?action=createTask" method="post">
        <label for="taskName">Nome da Tarefa:</label>
        <input type="text" id="taskName" name="taskName" required>
        <br>
        <label for="deadline">Prazo:</label>
        <input type="date" id="deadline" name="deadline" required>
        <br>
        <input type="submit" value="Create">
    </form>
    <a href="index.php">Voltar para lista de tarefas</a>
</body>
</html>


