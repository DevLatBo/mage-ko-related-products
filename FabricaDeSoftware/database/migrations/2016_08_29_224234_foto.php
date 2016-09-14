<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create("foto",function(Blueprint $table){
            $table->increments("id");
            $table->string("nombre_foto");
            $table->string("foto");
            $table->integer('galeria_id')->unsigned();
        });
        Schema::table("foto",function(Blueprint $table){
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
        //Schema::drop("foto");
    }
}
