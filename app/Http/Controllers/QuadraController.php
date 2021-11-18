<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Quadra;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuadraController extends Controller
{
    public function list()
    {
        $objQuadra = Quadra::all();

        return view('quadra/quadraList')->with('quadras', $objQuadra);
    }

    public function create()
    {
        $funcionarios = Funcionario::all();

        return view('quadra/quadraCreate', compact('funcionarios'));
    }

    public function edit($id)
    {
        $quadra  = Quadra::find($id);
        $funcionarios = Funcionario::all();

        return view('quadra/quadraEdit', compact('quadra','funcionarios'));
    }
    public function delete($id)
    {
        $quadra  = Quadra::find($id);

        if (empty($quadra)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $quadra->delete();

        return redirect()->action('App\Http\Controllers\QuadraController@list');
    }

    public function search(Request $request)
    {
        $nome = $request->input('nome');

        $quadras = Quadra::query()
            ->where('nome', 'like', '%' . $nome . '%')
            ->get();

        return view('quadra/quadraList')->with('quadras', $quadras);
    }

    public function save(Request $request, $id)
    {
        Validator::make($request->all(), Quadra::rules(), Quadra::message())->validate();

        if ($id == 0) {
            $quadra = new Quadra();
            $quadra->nome = $request->input('nome');
            $quadra->cor_gramado = $request->input('cor_gramado');
            $quadra->id_funcionario = $request->input('id_funcionario');

            $quadra->save();

            return redirect()->action('App\Http\Controllers\QuadraController@list');
        } else {
            $quadra = Quadra::find($id);
            $quadra->nome = $request->input('nome');
            $quadra->cor_gramado = $request->input('cor_gramado');
            $quadra->id_funcionario = $request->input('id_funcionario');

            $quadra->save();

            return redirect()->action('App\Http\Controllers\QuadraController@list');
        }
    }
}
