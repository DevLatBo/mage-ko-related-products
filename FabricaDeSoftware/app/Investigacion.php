<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Investigacion extends Model
{
    protected $table="investigacion";
    public $timestamps=false;
    protected $fillable=["nombre","descripcion"];

    public function areas(){
    	return $this->belongsToMany("Fabrica\Area","desarrollo","investigacion_id","area_id");
    }

}
