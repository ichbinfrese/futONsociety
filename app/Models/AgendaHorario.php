<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaHorario extends Model
{
    protected $table = "agendahorario";

    public function jogador()
    {
        return $this->belongsTo(Jogador::class,'id_jogador');
    }

    public function bola()
    {
        return $this->belongsTo(Bola::class,'id_bola');
    }

    public function quadra()
    {
        return $this->belongsTo(Quadra::class,'id_quadra');
    }

    public static function rules()
    {
        return [
            'titulo' => 'required|max:100',
            'dia' => 'required',
            'horario' => 'required',
            'id_jogador' => 'required',
            'id_bola' => 'required',
            'id_quadra' => 'required',
        ];
    }

    public static function message()
    {
        return [
            'titulo.required' => 'O campo título é obrigatório',
            'titulo.max' => 'Só é permitida a inserção de 80 caracteres no campo titulo',
            'dia.required' => 'O campo dia é obrigatório',
            'horario.required' => 'O campo horário é obrigatório',
            'id_jogador.required' => 'O campo de seleção de jogador responsável é obrigatório',
            'id_bola.required' => 'O campo de seleção de bola usada é obrigatório',
            'id_quadra.required' => 'O campo de seleção de quadra reservada é obrigatório',

        ];
    }}
