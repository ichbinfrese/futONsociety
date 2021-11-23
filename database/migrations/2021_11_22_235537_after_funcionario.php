<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('funcionario', function (Blueprint $table) {
            $table->string('nome_arquivo', 150)->after('created_at')->nulltable();
        });
    }
}