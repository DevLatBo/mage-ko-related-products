<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    protected $table="tipo_usuario";
    public $timestamps=false;
    protected $fillable=["nombre_tipo"];

}
