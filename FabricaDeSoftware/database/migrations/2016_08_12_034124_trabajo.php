<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create("trabajo",function(Blueprint $table){
            $table->integer("usuario_id")->unsigned();
            $table->integer("area_id")->unsigned();
        });
        Schema::table("trabajo",function(Blueprint $table){
            $table->foreign("usuario_id")
                ->references("id")
                ->on("usuario")
                ->onDelete("cascade");
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
        //Schema::drop("trabajo");
    }
}
