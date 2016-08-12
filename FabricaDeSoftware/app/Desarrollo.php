<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Desarrollo extends Model
{
    protected $table="desarrollo";
    public $timestamps=false;
    protected $fillable=["investigacion_id","area_id"];
}
