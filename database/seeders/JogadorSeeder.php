<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JogadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jogador')->insert([

            [
            'nome' => "José Maria Neto",
            'cpf' => "045.777.467-22",
            'telefone' => "49 9453 5567",
            'email' => "jose.maria.neto@gmail.com",
            'id_bola' => "1",
            ],

            [
            'nome' => "Marcelo Pereira",
            'cpf' => "024.777.777-22",
            'telefone' => "49 8890 7645",
            'email' => "pereirinha@gmail.com",
            'id_bola' => "2",
            ],

            [
            'nome' => "Nicolas Pedrassani",
            'cpf' => "045.000.789-44",
            'telefone' => "49 9889 0279",
            'email' => "nicolas@gmail.com",
            'id_bola' => "3",
            ],

            [
            'nome' => "Vânio dos Santos",
            'cpf' => "456.234.555-45",
            'telefone' => "49 8956 4523",
            'email' => "vaniosantos@gmail.com",
            'id_bola' => "4",
            ]
        ]);
    }
}
