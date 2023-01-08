<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateG4llosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g4llos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //Datos Generales
            $table->bigIncrements('id');
            $table->bigInteger('equipo_id')->unsigned();
            
            //Datos para Gallo 1
            $table->integer('gallo4_anillo')->nullable();
            //
            $table->foreign('equipo_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g4llos');
    }
}
