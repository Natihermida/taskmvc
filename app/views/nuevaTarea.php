<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Tarea</title>
</head>
<body>
    <h3>Nueva Tarea</h3>
    <form action="index.php?action=agregar" method="post">
        <input type="text" name="descripcion" placeholder="Descripción de la tarea" required>
        <input type="submit" value="Agregar Tarea">
    </form>
</body>
</html>
