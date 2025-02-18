<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;//uso el namespace de la clase Model

class Task extends Model{
    protected $table="tareas";
    protected $primaryKey="tareas_id";
}

?>