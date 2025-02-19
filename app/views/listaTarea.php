<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    
    <!-- Mostrar las tareas -->
    <?php
    foreach($data as $tarea){
        echo "<p>".$tarea->descripcion." <a href='/apptaskmvc/task/edit/".$tarea->tareas_id."'>Editar</a> | <a href='index.php?action=eliminar&id=".$tarea->id."' onclick='return confirm(\"¿Estás seguro de eliminar esta tarea?\");'>Eliminar</a></p>";
    }
    ?>

    <br>
    <a href="index.php?action=nueva_tarea">Agregar nueva tarea</a>
</body>
</html>
