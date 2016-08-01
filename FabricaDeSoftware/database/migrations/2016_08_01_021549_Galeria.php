<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Galeria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('galeria', function($table)
        {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('investigacion_id')->unsigned();
        });
        Schema::table('galeria', function($table)
        {
            $table->foreign('investigacion_id')
                ->references('id')->on('Investigacion')
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
        //Schema::drop('galeria');
    }
}
