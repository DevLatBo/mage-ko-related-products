<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Desarrollo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create("desarrollo",function(Blueprint $table){
            $table->integer('investigacion_id')->unsigned();
            $table->integer('area_id')->unsigned();
        });
        Schema::table("desarrollo",function(Blueprint $table){
            $table->foreign("investigacion_id")
                ->references('id')
                ->on('investigacion')
                ->onDelete('cascade');
            $table->foreign('area_id')
                ->references('id')
                ->on('area')
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
        //
    }
}
