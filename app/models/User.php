<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;//uso el namespace de la clase Model

class User extends Model{
    protected $table="usuarios";
    protected $primaryKey="Usuarios_id";
}

?>