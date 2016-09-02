<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create("articulo",function(Blueprint $table){
            $table->increments("id");
            $table->string("titulo");
            $table->string("descripcion");
            $table->integer("area_id")->unsigned();
        });
        Schema::table("articulo",function(Blueprint $table){
            $table->foreign("area_id")
                ->references("id")
                ->on("area")
                ->onDelete("cascade");
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop("articulo");
    }
}
