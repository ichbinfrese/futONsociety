<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bola extends Model
{
    protected $table = "bola";

    public static function rules()
    {
        return [
            'nome' => 'required|max:80',
            'marca' => 'required|max:20',
            'composicao' => 'required|max:100',
            'circunferencia' => 'required|max:20',
        ];
    }

    public static function message()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'Só é permitida a inserção de 80 caracteres no campo nome',
            'marca.required' => 'O campo marca é obrigatório',
            'marca.max' => 'Só é permitida a inserção de 20 caracteres no campo marca',
            'composicao.required' => 'O campo composição é obrigatório',
            'composicao.max' => 'Só é permitida a inserção de 150 caracteres no campo composição',
            'circunferencia.required' => 'O campo circunferência é obrigatório',
            'circunferencia.max' => 'Só é permitida a inserção de 20 caracteres no campo circunferência',
        ];
    }
}
