<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table="video";
    public $timestamps=false;
    protected $fillable=["nombre_video","url","galeria_id"];
}
