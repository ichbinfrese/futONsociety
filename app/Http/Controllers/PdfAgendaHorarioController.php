<?php

namespace App\Http\Controllers;

use App\Models\AgendaHorario;
use PDF;

class PdfAgendaHorarioController extends Controller
{
    public function geraPdf (){
        $agendahorario = AgendaHorario::all();

        $pdfAgendaHorario = PDF::loadView('pdfAgendaHorario', compact ('agendahorario'));

        return $pdfAgendaHorario->setPaper('a4')->stream('listagemAgendaHorario.pdf');
    }
}
