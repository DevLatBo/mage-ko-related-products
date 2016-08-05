<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('personal',function(Blueprint $table){
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_tipo')->unsigned();
        });
        Schema::table('personal',function(Blueprint $table){
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuario')
                ->onDelete('cascade');
            $table->foreign('id_tipo')
                ->references('id')
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
