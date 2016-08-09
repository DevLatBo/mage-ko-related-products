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
        /*Schema::create('usuario',function(Blueprint $table){
        $table->increments('id');
        $table->string('nombre');
        $table->string('correo');
        $table->string('departamento');
        $table->string('cargo');
        $table->string('foto');
        });*/     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('usuario');
        /*Schema::create('usuario',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('correo');
            $table->string('departamento');
            $table->string('cargo');
            $table->string('foto');
            $table->integer('tipo_id')->unsigned();
        });
        Schema::table('usuario',function($table){
            $table->foreign('tipo_id')->references('id')->on('tipo_usuario')
                ->onDelete('cascade');
        });*/
    }
}
