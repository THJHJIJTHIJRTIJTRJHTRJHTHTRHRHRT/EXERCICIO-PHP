<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes de Tarefa</title>
</head>
<body>
    <h1>Detalhes de Tarefa</h1>
    <p><strong>ID:</strong> <?php echo htmlspecialchars($task['id'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Tarefa:</strong> <?php echo htmlspecialchars($task['taskName'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Prazo:</strong> <?php echo htmlspecialchars($task['deadline'], ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="index.php">Voltar para lista de tarefas</a>
</body>
</html>
