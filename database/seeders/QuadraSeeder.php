<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuadraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quadra')->insert([

            [
            'nome' => "Quadra Municipal Xaxiense",
            'cor_gramado' => "Azul",
            'id_funcionario' => "3",
            ],

            [
            'nome' => "Quadra Castelo Branco",
            'cor_gramado' => "Branco",
            'id_funcionario' => "2",
            ],

            [
            'nome' => "Quadra Maracanãzinho",
            'cor_gramado' => "Verde",
            'id_funcionario' => "1",
            ],

            [
            'nome' => "Quadra All Black",
            'cor_gramado' => "Preto",
            'id_funcionario' => "4",
            ]
        ]);

    }
}
