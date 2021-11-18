<?php

namespace App\Http\Controllers;

use App\Models\AgendaHorario;
use App\Models\Jogador;
use App\Models\Bola;
use App\Models\Quadra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AgendaHorarioController extends Controller
{
    public function list()
    {
        $objAgendaHorario = AgendaHorario::all();

        return view('horario/horarioList')->with('agendashorarios', $objAgendaHorario);
    }

    public function create()
        {
            $jogadores = Jogador::all();
            $bolas = Bola::all();
            $quadras = Quadra::all();

            return view('horario/horarioCreate', compact('jogadores','bolas','quadras'));
        }

    public function edit($id)
    {
        $agendahorario  = AgendaHorario::find($id);
        $jogadores = Jogador::all();
        $bolas = Bola::all();
        $quadras = Quadra::all();

        return view('horario/horarioEdit', compact('agendahorario', 'jogadores', 'bolas', 'quadras'));
    }

    public function delete($id)
    {
        $agendahorario  = AgendaHorario::find($id);

        if (empty($agendahorario)) {
            return "<h2>Erro ao consultar o id informado</h2>";
        }
        $agendahorario->delete();

        return redirect()->action('App\Http\Controllers\AgendaHorarioController@list');
    }

    public function search(Request $request)
    {
        $titulo = $request->input('titulo');

        $agendashorarios = AgendaHorario::query()
            ->where('titulo', 'like', '%' . $titulo . '%')
            ->get();

        return view('horario/horarioList')->with('agendashorarios', $agendashorarios);
    }

    public function save(Request $request, $id)
    {

        Validator::make($request->all(), AgendaHorario::rules(), AgendaHorario::message())->validate();

        if ($id == 0) {
            $agendahorario = new AgendaHorario();
            $agendahorario->titulo = $request->input('titulo');
            $agendahorario->dia = $request->input('dia');
            $agendahorario->horario = $request->input('horario');
            $agendahorario->id_jogador = $request->input('id_jogador');
            $agendahorario->id_bola = $request->input('id_bola');
            $agendahorario->id_quadra = $request->input('id_quadra');

            $agendahorario->save();

            return redirect()->action('App\Http\Controllers\AgendaHorarioController@list');
        } else {
            $agendahorario = AgendaHorario::find($id);
            $agendahorario->titulo = $request->input('titulo');
            $agendahorario->dia = $request->input('dia');
            $agendahorario->horario = $request->input('horario');
            $agendahorario->id_jogador = $request->input('id_jogador');
            $agendahorario->id_bola = $request->input('id_bola');
            $agendahorario->id_quadra = $request->input('id_quadra');

            $agendahorario->save();

            return redirect()->action('App\Http\Controllers\AgendaHorarioController@list');
        }
    }
}
