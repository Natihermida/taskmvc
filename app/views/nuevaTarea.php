<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>assets/css/style.css">
    <title>Nueva Tarea</title>
</head>
<body>
    <h3>Nueva Tarea</h3>
    <form action="" method="post">
       <input type="text" name="titulo" placeholder ="titulo"> 
       <input type="text" name="descripcion" placeholder="Descripción de la tarea" required>
       <input type="date" name="fecha_inicio" placeholder ="fecha_inicio">
       <input type="date" name="fecha_fin" placeholder ="fecha_fin">


   
        <input type="submit" value="Agregar Tarea">

    </form>
</body>
</html>
