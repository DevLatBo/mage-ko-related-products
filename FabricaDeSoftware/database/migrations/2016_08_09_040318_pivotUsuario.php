<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('personal',function(Blueprint $table){
            $table->integer('usuario_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
        });
        Schema::table('personal',function(Blueprint $table){
            $table->foreign('usuario_id')->references('id')
                ->on('usuario')
                ->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')
                ->on('tipo_usuario')
                ->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('personal');
    }
}
