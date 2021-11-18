<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use PDF;

class PdfFuncionarioController extends Controller
{
    public function geraPdf (){
        $funcionario = Funcionario::all();

        $pdfFuncionario = PDF::loadView('pdfFuncionario', compact ('funcionario'));

        return $pdfFuncionario->setPaper('a4')->stream('listagemFuncionarios.pdf');
    }
}
