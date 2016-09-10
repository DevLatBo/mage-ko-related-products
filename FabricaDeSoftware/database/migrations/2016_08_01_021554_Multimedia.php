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
        /*Schema::create('multimedia', function($table)
        {
            $table->increments('id');
            $table->string('multimedia');
            $table->string('descripcion');
            $table->integer('galeria_id')->unsigned();
        });

        Schema::table('multimedia', function($table)
        {
            $table->foreign('galeria_id')
                ->references('id')->on('galeria')
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
        //Schema::drop('multimedia');
    }
}
