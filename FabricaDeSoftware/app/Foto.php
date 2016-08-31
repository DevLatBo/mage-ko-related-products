<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table="foto";
    public $timestamps=false;
    protected $fillable=["nombre_foto","foto"];
}
