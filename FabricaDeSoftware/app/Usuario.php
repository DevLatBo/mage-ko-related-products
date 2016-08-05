<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table="usuario";

    public $timestamps=false;
    protected $fillable=["nombre","correo","departamento","cargo","foto","tipo_id"];

}
