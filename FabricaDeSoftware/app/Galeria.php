<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table='galeria';

    public $timestamps=false;

    protected $fillable=['nombre_galeria'];
}
