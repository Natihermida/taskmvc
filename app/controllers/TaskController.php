<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Task;
use Formacom\models\User;

class TaskController extends Controller{
    public function index(...$params){
        $data=["mensaje"=>"Hola desde Index de HomeController"];
        $tareas=Task::all();
        //$user=User::all();
        //
        $this->view("listaTarea", $tareas);
    }

    public function edit(...$params){
        $tarea=Task::find($params[0]);
        //echo "Metodo edit ".$tarea->titulo;
        $this->view("editarTarea", $tarea);

    }

    public function new(){
        if(isset($_POST["descripcion"])){
            $task=new Task();
            $task->descripcion=$_POST["descripcion"];
            $task->Usuarios_id=3;
            $task->save();
            header("Location: /apptaskmvc");
            exit();
        }
        $this->view("nuevaTarea");
    }



}


?>