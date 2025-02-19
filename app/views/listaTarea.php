<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL(); ?>assets/css/style.css">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    
    <!-- Mostrar las tareas -->
    <?php
    foreach($data as $tarea):?>
        <li>
            <strong><?php echo $tarea->titulo;?></strong>:
            <?php $tarea->descripcion;?>
            <a href="task/edit/<?=$tarea->tareas_id?>">Editar</a>
            <a href="task/delete/<?=$tarea->tareas_id?>">Eliminar</a>
        </li>
        <?php endforeach; ?>
    
    

    <br>
    <a href="/apptaskmvc/task/new/">Agregar nueva tarea</a>
</body>
</html>
