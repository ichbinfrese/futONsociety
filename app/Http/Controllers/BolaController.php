<?php

namespace App\Http\Controllers;

use App\Models\Bola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BolaController extends Controller
{
    public function list()
    {
        $objBola = Bola::all();

        return view('bola/bolaList')->with('bolas', $objBola);
    }

    public function create()
        {
            return view('bola/bolaCreate');
        }

    public function edit($id)
    {

        $bola  = Bola::find($id);

        return view('bola/bolaEdit')->with('bola', $bola);
    }

    public function delete($id)
    {
        $bola  = Bola::find($id);

        if (empty($bola)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $bola->delete();

        return redirect()->action('App\Http\Controllers\BolaController@list');
    }

    public function search(Request $request)
    {
        $nome = $request->input('nome');

        $query = DB::table('bola');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $bolas = $query->orderBy('nome')->paginate(20);

        return view('bola/bolaList')->with('bolas', $bolas);
    }

    public function save(Request $request, $id)
    {

        Validator::make($request->all(), Bola::rules(), Bola::message())->validate();

        if ($id == 0) {
            $bola = new Bola();
            $bola->nome = $request->input('nome');
            $bola->marca = $request->input('marca');
            $bola->composicao = $request->input('composicao');
            $bola->circunferencia = $request->input('circunferencia');

            $bola->save();

            return redirect()->action('App\Http\Controllers\BolaController@list');
        } else {
            $bola = Bola::find($id);
            $bola->nome = $request->input('nome');
            $bola->marca = $request->input('marca');
            $bola->composicao = $request->input('composicao');
            $bola->circunferencia = $request->input('circunferencia');

            $bola->save();

            return redirect()->action('App\Http\Controllers\BolaController@list');
        }
    }
}
