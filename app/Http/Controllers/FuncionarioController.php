<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FuncionarioController extends Controller
{
    public function list()
    {
        $objFuncionario = Funcionario::all();

        return view('funcionario/funcionarioList')->with('funcionarios', $objFuncionario);
    }

    public function create()
    {
        return view('funcionario/funcionarioCreate');
    }

    public function edit(request $request, $id)
    {
        $funcionario  = Funcionario::find($id);

        $input = $request->all();
        $image = $request->file("nome_arquivo");

            if ($image){
            $nome_arquivo = date('YmdHis') .".".$image->getClientOriginalExtension();
            $request->nome_arquivo->storeAs('public/imagem', $nome_arquivo);
        }
        Funcionario::create($input);

        return view('funcionario/funcionarioEdit')->with('funcionario', $funcionario);
    }

    public function delete($id)
    {
        $funcionario  = Funcionario::find($id);

        if (empty($funcionario)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $funcionario->delete();

        return redirect()->action('App\Http\Controllers\FuncionarioController@list');
    }

    public function search(Request $request)
    {
        $nome = $request->input('nome');

        $query = DB::table('funcionario');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $funcionarios = $query->orderBy('nome')->paginate(20);

        return view('funcionario/funcionarioList')->with('funcionarios', $funcionarios);
    }

    public function save(Request  $request, $id,)
    {
        Validator::make($request->all(), Funcionario::rules(), Funcionario::message())->validate();

        if ($id == 0) {
            $funcionario = new Funcionario();
            $funcionario->nome = $request->input('nome');
            $funcionario->cpf = $request->input('cpf');
            $funcionario->telefone = $request->input('telefone');
            $funcionario->email = $request->input('email');

            $funcionario->save();

            return redirect()->action('App\Http\Controllers\FuncionarioController@list');
        } else {
            $funcionario = Funcionario::find($id);
            $funcionario->nome = $request->input('nome');
            $funcionario->cpf = $request->input('cpf');
            $funcionario->telefone = $request->input('telefone');
            $funcionario->email = $request->input('email');
            

            $funcionario->save();

            return redirect()->action('App\Http\Controllers\FuncionarioController@list');
        }
        $input = $request->all();
        $image = $request->file("nome_arquivo");

            if ($image){
            $nome_arquivo = date('YmdHis') .".".$image->getClientOriginalExtension();
            $request->nome_arquivo->storeAs('public/imagem', $nome_arquivo);
            $input['nome_arquivo'] = $nome_arquivo;
        }
        Funcionario::create($input);

        return redirect()->action('App\Http\Controllers\FuncionarioController@list');
    }
}
