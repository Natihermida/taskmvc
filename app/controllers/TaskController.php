<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Task;
use Formacom\models\User;

class TaskController extends Controller{
    public function index(...$params){
        $data=["mensaje"=>"Hola desde Index de TaskController"];
        $tareas=Task::all();
        //$user=User::all();
        //
        $this->view("listaTarea", $tareas);
    }

    public function edit(...$params){
               $tarea=Task::find($params[0]);

               if(isset($_POST["descripcion"])){
                $tarea=new Task();
                $tarea->descripcion=$_POST["descripcion"];
                $tarea->titulo=$_POST["titulo"];
                $tarea->fecha_inicio=$_POST["fecha_inicio"];
                $tarea->fecha_fin=$_POST["fecha_fin"];
                $tarea->Usuarios_id=3;
                $tarea->save();
                header("Location: /apptaskmvc");
                exit();
            }
            $this->view("editarTarea",$tarea);
        }

    public function new(){
        if(isset($_POST["descripcion"])){
            $task=new Task();
            $task->descripcion=$_POST["descripcion"];
            $task->titulo=$_POST["titulo"];
            $task->fecha_inicio=$_POST["fecha_inicio"];
            $task->fecha_fin=$_POST["fecha_fin"];
            $task->Usuarios_id=3;
            $task->save();
            header("Location: /apptaskmvc");
            exit();
        }
        $this->view("nuevaTarea");
    }

    public function delete(...$params){
        $tarea=Task::find($params[0]);
        $tarea->delete();
        header("Location: /apptaskmvc");
    }

}


?>