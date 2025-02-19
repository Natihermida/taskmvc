<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= BASE_URL(); ?>assets/css/style.css">
    <title>Editar Tarea</title>

</head>
<body>
    <h1>Editar Tarea</h1>

    <!-- Mostrar el formulario para editar la tarea -->


        <form action='' method='post'>
            <input type="text" name="titulo" value="<?=$data->titulo?>">
            <input type='text' name='descripcion' value='<?= $data->descripcion?>' required>
            <input type='submit' value='Guardar cambios'>
        </form>
 

    <br>
    
</body>
</html>
