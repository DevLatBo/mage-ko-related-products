<?php

namespace Fabrica;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table='personal';
    public $timestamps=false;
    protected $fillable=['id_usuario','id_tipo'];
}
