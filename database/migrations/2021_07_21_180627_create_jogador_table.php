<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',80);
            $table->string('cpf',20);
            $table->string('telefone',18);
            $table->string('email',80);
            $table-> unsignedBigInteger('id_bola');
            $table->foreign('id_bola')->references('id')->on('bola')->onDelete('cascade');
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
        Schema::dropIfExists('jogador');
    }
}
