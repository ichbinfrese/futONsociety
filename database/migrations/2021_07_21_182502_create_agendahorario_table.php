<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendahorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendahorario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',100);
            $table->date('dia');
            $table->time('horario');
            $table->unsignedBigInteger('id_jogador');
            $table->foreign('id_jogador')->references('id')->on('jogador')->onDelete('cascade');
            $table-> unsignedBigInteger('id_bola');
            $table->foreign('id_bola')->references('id')->on('bola')->onDelete('cascade');
            $table-> unsignedBigInteger('id_quadra');
            $table->foreign('id_quadra')->references('id')->on('quadra')->onDelete('cascade');
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
        Schema::dropIfExists('agendahorario');
    }
}
