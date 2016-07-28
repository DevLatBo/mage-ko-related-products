<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    protected $table="Investigacion";

    public $timestamps=false;

    protected $fillable=["nombre","descripcion","url"];

}
