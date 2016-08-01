<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::create('usuario',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('correo');
            $table->string('departamento');
            $table->string('cargo');
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipo_usuario');
        });*/
    }
}
