<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "funcionario";

    public static function rules()
    {
        return [
            'nome' => 'required|max:80',
            'cpf' => 'required|max:20',
            'telefone' => 'required|max:18',
            'email' => 'required|max:80',
        ];
    }

    public static function message()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'Só é permitida a inserção de 80 caracteres no campo nome',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.max' => 'Só é permitida a inserção de 20 caracteres no campo cpf',
            'telefone.required' => 'O campo telefone é obrigatório',
            'telefone.max' => 'Só é permitida a inserção de 18 caracteres no campo telefone',
            'email.required' => 'O campo email é obrigatório',
            'email.max' => 'Só é permitida a inserção de 80 caracteres no campo email',
        ];
    }
}
