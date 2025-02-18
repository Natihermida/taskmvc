<?php
// models/TareaModel.php

class Tarea {
    public $id;
    public $descripcion;

    public function __construct($id, $descripcion) {
        $this->id = $id;
        $this->descripcion = $descripcion;
    }
}

class TareaModel {
    private static $tareas = [];
    private static $idCounter = 1;

    public static function agregarTarea($descripcion) {
        $tarea = new Tarea(self::$idCounter, $descripcion);
        self::$tareas[] = $tarea;
        self::$idCounter++;
    }

    public static function obtenerTareas() {
        return self::$tareas;
    }

    public static function obtenerTarea($id) {
        foreach (self::$tareas as $tarea) {
            if ($tarea->id == $id) {
                return $tarea;
            }
        }
        return null;
    }

    public static function editarTarea($id, $nuevaDescripcion) {
        foreach (self::$tareas as $tarea) {
            if ($tarea->id == $id) {
                $tarea->descripcion = $nuevaDescripcion;
                return $tarea;
            }
        }
        return null;
    }

    public static function eliminarTarea($id) {
        foreach (self::$tareas as $index => $tarea) {
            if ($tarea->id == $id) {
                unset(self::$tareas[$index]);
                self::$tareas = array_values(self::$tareas); // Re-indexar el array
                return true;
            }
        }
        return false;
    }
}
