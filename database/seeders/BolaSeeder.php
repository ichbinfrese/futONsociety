<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bola')->insert([

            [
            'nome' => "Bola de futebol Copa América Strike",
            'marca' => "Nike",
            'composicao' => "60% borracha, 15% poliuretano e 25% poliéster",
            'circunferencia' => "68 cm - 70 cm",
            ],

            [
            'nome' => "Bola Finale 20 Real Madrid Club",
            'marca' => "Adidas",
            'composicao' => "60% borracha, 25% poliéster e 15% EVA",
            'circunferencia' => "68 cm - 70 cm",
            ],

            [
            'nome' => "Bola de futebol Starlancer Club",
            'marca' => "Adidas",
            'composicao' => "TPU com câmara de butil",
            'circunferencia' => "68 cm - 70 cm",
            ],

            [
            'nome' => "Bola de futebol PSG Stars",
            'marca' => "Nike",
            'composicao' => "TPU com câmara de borracha",
            'circunferencia' => "68 cm - 70 cm",
            ]
        ]);
    }
}
