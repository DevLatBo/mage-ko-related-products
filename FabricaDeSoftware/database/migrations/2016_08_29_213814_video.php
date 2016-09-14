<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Video extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*Schema::create("video",function(Blueprint $table){
            $table->increments("id");
            $table->string("nombre_video");
            $table->string("url");
            $table->integer('galeria_id')->unsigned();
        });
        Schema::table("video",function(Blueprint $table){
            $table->foreign('galeria_id')
                ->references("id")->on('galeria')
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
        //Schena::drop("video");
    }
}
