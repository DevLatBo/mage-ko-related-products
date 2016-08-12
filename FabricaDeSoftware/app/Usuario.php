<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table="usuario";

    public $timestamps=false;
    protected $fillable=["nombre","correo","departamento","cargo","foto"];

    public function tipos(){
    	return $this->belongsToMany('Fabrica\tipo','personal','usuario_id','tipo_id');
    }
    public function areas(){
    	return $this->belongsToMany('Fabrica\Area','trabajo','usuario_id','area_id');
    }
}
