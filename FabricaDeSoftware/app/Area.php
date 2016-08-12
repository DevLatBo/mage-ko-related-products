<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table="area";
    public $timestamps=false;
    protected $fillable=["nombre"];

    public function investigaciones(){
    	return $this->belongsToMany("Fabrica\Investigacion","desarrollo","investigacion_id","area_id");
    }
}
