<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendahorario')->insert([

            [
            'titulo' => "Amistoso FC Independente x FC Boca",
            'dia' => "21/07/30",
            'horario' => "15:00:00",
            'id_jogador' => "1",
            'id_bola' => "1",
            'id_quadra' => "1",
            ],

            [
            'titulo' => "Jogo de Copa FC Xaxim x FC Xanxere",
            'dia' => "21/08/02",
            'horario' => "20:30:00",
            'id_jogador' => "3",
            'id_bola' => "4",
            'id_quadra' => "3",
            ],

            [
            'titulo' => "Jogo de Copa FC Marema x FC Chapecó",
            'dia' => "21/08/02",
            'horario' => "20:30:00",
            'id_jogador' => "2",
            'id_bola' => "2",
            'id_quadra' => "4",
            ],

            [
            'titulo' => "Treino sub15 DME",
            'dia' => "21/08/03",
            'horario' => "10:00:00",
            'id_jogador' => "4",
            'id_bola' => "3",
            'id_quadra' => "2",
            ],

            [
            'titulo' => "Amistoso FC Alambique x FC Shaktar",
            'dia' => "21/08/05",
            'horario' => "21:00:00",
            'id_jogador' => "1",
            'id_bola' => "4",
            'id_quadra' => "3",
            ]
        ]);
    }
}
