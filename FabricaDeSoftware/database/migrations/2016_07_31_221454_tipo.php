<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*DB::table('tipo_usuario')->insert(['nombre_tipo'=>'Personal Cientifico']);
        DB::table('tipo_usuario')->insert(['nombre_tipo'=>'Personal Administrativo']);
        DB::table('tipo_usuario')->insert(['nombre_tipo'=>'Personal Honorario']);
        DB::table('tipo_usuario')->insert(['nombre_tipo'=>'Soporte']);*/
        /*Schema::create('tipo_usuario',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_tipo');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
