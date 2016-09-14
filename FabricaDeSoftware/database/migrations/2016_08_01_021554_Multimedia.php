<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Multimedia extends Migration
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
        /*Schema::create('multimedia', function($table)
        {
            $table->increments('id');
            $table->binary('foto');
            $table->string('video');
            $table->integer('galeria_id')->unsigned();
        });

        Schema::table('multimedia', function($table)
        {
            $table->foreign('galeria_id')
                ->references('id')->on('galeria')
                ->onDelete('cascade');
        });*/
        //Schema::drop('multimedia');
    }
}
