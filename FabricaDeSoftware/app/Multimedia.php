<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $table="multimedia";
    public $timestamps=false;
    protected $fillable=["multimedia","descripcion","galeria_id"];
}
