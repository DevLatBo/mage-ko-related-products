<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Area extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('area',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->integer('investigacion_id')->unsigned();
        });
        Schema::table('area',function(Blueprint $table){
            $table->foreign('investigacion_id')
                ->references('id')
                ->on('Investigacion');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('area');
        /*DB::table('area')->insert(['nombre'=>'Robotica']);
        DB::table('area')->insert(['nombre'=>'Aprendizaje Automatico']);
        DB::table('area')->insert(['nombre'=>'Vision por Computador']);
        DB::table('area')->insert(['nombre'=>'Backend']);
        DB::table('area')->insert(['nombre'=>'Aplicacion Movil']);*/
    }
}
