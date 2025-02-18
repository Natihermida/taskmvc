<?php
namespace Formacom\controllers;
use Formacom\core\Controller;
use Formacom\models\Task;

class HomeController extends Controller{
    public function index(...$params){
        $data=["mensaje"=>"Hola desde Index de HomeController"];
        $tareas=Task::all();
        $this->view("listaTarea", $tareas);
    }

    public function edit(...$params){
        $tarea=Task::find($params[0]);
        //echo "Metodo edit ".$tarea->titulo;
        $this->view("editarTarea", $tarea);

    }

    public function new(){
        echo "Hola desde New de HomeController";
    }



}


?>