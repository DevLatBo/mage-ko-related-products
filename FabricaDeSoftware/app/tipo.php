<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    protected $table="tipo";
    public $timestamps=false;
    protected $fillable=["nombre_tipo"];

    public function usuarios(){
    	return $this->belongsToMany('Fabrica\Usuario','personal','usuario_id','tipo_id');
    }
}
