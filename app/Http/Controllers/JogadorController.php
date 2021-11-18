<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use App\Models\Bola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class JogadorController extends Controller
{
    public function list()
    {
        $objJogador = Jogador::all();

        return view('jogador/jogadorList')->with('jogadores', $objJogador);
    }

    public function create()
    {
        $bolas = Bola::all();

        return view('jogador/jogadorCreate', compact('bolas'));
    }

    public function edit($id)
    {
        $jogador  = Jogador::find($id);
        $bolas = Bola::all();

        return view('jogador/jogadorEdit', compact('jogador','bolas'));
    }
    public function delete($id)
    {
        $jogador  = Jogador::find($id);

        if (empty($jogador)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $jogador->delete();

        return redirect()->action('App\Http\Controllers\JogadorController@list');
    }

    public function search(Request $request)
    {
        $nome = $request->input('nome');

        $jogadores = Jogador::query()
            ->where('nome', 'like', '%' . $nome . '%')
            ->get();

        return view('jogador/jogadorList')->with('jogadores', $jogadores);
    }

    public function save(Request $request, $id)
    {
        Validator::make($request->all(), Jogador::rules(), Jogador::message())->validate();

        if ($id == 0) {
            $jogador = new Jogador();
            $jogador->nome = $request->input('nome');
            $jogador->cpf = $request->input('cpf');
            $jogador->telefone = $request->input('telefone');
            $jogador->email = $request->input('email');
            $jogador->id_bola = $request->input('id_bola');

            $jogador->save();

            return redirect()->action('App\Http\Controllers\JogadorController@list');
        } else {
            $jogador = Jogador::find($id);
            $jogador->nome = $request->input('nome');
            $jogador->cpf = $request->input('cpf');
            $jogador->telefone = $request->input('telefone');
            $jogador->email = $request->input('email');
            $jogador->id_bola = $request->input('id_bola');

            $jogador->save();

            return redirect()->action('App\Http\Controllers\JogadorController@list');
        }
    }
}
