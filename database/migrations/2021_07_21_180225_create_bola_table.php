<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bola', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',80);
            $table->string('marca',20);
            $table->string('composicao',100);
            $table->string('circunferencia',20);

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
        Schema::dropIfExists('bola');
    }
}
