<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionario')->insert([

            [
            'nome' => "Carlos Alberto de Jesus",
            'cpf' => "014.379.085-64",
            'telefone' => "49 99874 5697",
            'email' => "carlos@gmail.com",
            ],

            [
            'nome' => "Maria Carla",
            'cpf' => "609.779.543-46",
            'telefone' => "49 98870 7240",
            'email' => "maria_carla@gmail.com",
            ],

            [
            'nome' => "Giovani Ribeiro",
            'cpf' => "204.767.024-44",
            'telefone' => "48 99905 0090",
            'email' => "gioribeiro@gmail.com",
            ],

            [
            'nome' => "Antonieta Frese",
            'cpf' => "487.905.662-12",
            'telefone' => "49 3319 2000",
            'email' => "antonieta@gmail.com",
            ]
        ]);
    }
}
