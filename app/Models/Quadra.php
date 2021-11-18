<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quadra extends Model
{
    protected $table = "quadra";

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class,'id_funcionario');
    }
    public static function rules()
    {
        return [
            'nome' => 'required|max:80',
            'cor_gramado' => 'required|max:30',
            'id_funcionario' => 'required',
        ];
    }

    public static function message()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'Só é permitida a inserção de 80 caracteres no campo nome',
            'cor_gramado.required' => 'O campo de cor do gramado é obrigatório',
            'cor_gramado.max' => 'Só é permitida a inserção de 30 caracteres no campo da cor do gramado',
            'id_funcionario.required' => 'O campo de seleção do funcionario responsável é obrigatório',
        ];
    }
}
