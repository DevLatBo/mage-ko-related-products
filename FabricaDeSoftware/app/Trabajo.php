<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table="trabajo";
    public $timestamps=false;
    protected $fillable=["usuario_id","area_id"];
}
