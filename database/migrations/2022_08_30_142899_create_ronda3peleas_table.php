<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ronda3peleas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');

            $table->bigInteger('participante_id')->unsigned()->unique()->nullable();
            $table->integer('rownum1');

            $table->bigInteger('clonparticipante_id')->unsigned()->unique()->nullable();
            $table->integer('rownum2');

            $table->foreign('participante_id')->references('id')->on('participantes')->onDelete('cascade');
            $table->foreign('clonparticipante_id')->references('id')->on('clonparticipantes')->onDelete('cascade');

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
        Schema::dropIfExists('ronda3peleas');
    }
};
