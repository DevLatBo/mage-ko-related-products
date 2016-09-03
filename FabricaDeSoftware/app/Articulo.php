<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table="articulo";
    public $timestamps=false;
    protected $fillable=["titulo","descripcion","area_id"];
}
