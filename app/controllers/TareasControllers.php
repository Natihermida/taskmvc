<?php
// controllers/TareaController.php
include_once 'models/TareaModel.php';

class TareaController {

    public function mostrarTareas() {
        $tareas = TareaModel::obtenerTareas();
        include 'views/index_view.php';
    }

    public function agregarTarea() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['descripcion'])) {
            TareaModel::agregarTarea($_POST['descripcion']);
        }
        header('Location: index.php');
    }

    public function editarTarea($id) {
        $tarea = TareaModel::obtenerTarea($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['descripcion'])) {
            TareaModel::editarTarea($id, $_POST['descripcion']);
            header('Location: index.php');
        }

        include 'views/editar_tarea_view.php';
    }

    public function eliminarTarea($id) {
        TareaModel::eliminarTarea($id);
        header('Location: index.php');
    }
}
