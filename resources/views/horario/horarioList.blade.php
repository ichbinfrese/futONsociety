@extends('layouts.app')

@section('title', 'FutON - Listagem de horários reservados')

<body>

@section('content')

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<form action="{{ action('App\Http\Controllers\AgendaHorarioController@search')}}" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
<div class="form-row">
    <div class="col-6">
        <input style="background-color:white; border-color:black; color:black" type="text" class="form-control" placeholder="Digite o título da reserva de horário que deseja buscar" name="titulo" id="">
</div>

<div class="col-6">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-outline-primary"> <i class="fas fa-search"></i> Buscar</button>
    <a style="background-color:white; border-color:black; color:black" href="{{ url('/agendahorario/create') }}" class="btn btn-outline-success"> <i class="fas fa-plus"></i> Cadastrar</a>
    <a style="background-color:white; border-color:black; color:black" href="{{ url('/pdfAgendaHorario') }}" class="btn btn-danger btn-lg"><i class="fas fa-file-pdf"></i></a>
</div>
</div>

</form>

<br>

<table class="table table-hover"  style="color: #000000;">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Título </th>
    <th scope="col">Dia </th>
    <th scope="col">Horário </th>
    <th scope="col">Jogador responsável </th>
    <th scope="col">Bola usada </th>
    <th scope="col">Quadra reservada </i></th>
    <th scope="col">Editar</th>
    <th scope="col">Deletar</th>
</tr>
</thead>
<tbody>
    @foreach ($agendashorarios as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->titulo}}</td>
            <td>{{ date( 'd/m/Y' , strtotime($item->dia))}}</td>
            <td>{{$item->horario}}</td>
            <td>{{$item->jogador->nome}}</td>
            <td>{{$item->bola->nome}}</td>
            <td>{{$item->quadra->nome}}</td>

        <td><a href="{{ action('App\Http\Controllers\AgendaHorarioController@edit',$item->id )}}" style='color: black;' ><i class='fas fa-user-edit'></i></a> </td>
        <td><a href="{{ action('App\Http\Controllers\AgendaHorarioController@delete',$item->id )}}"style='color: black;'><i class='fas fa-trash-alt'></i></a> </td>
    </tr>

@endforeach

</table>

@endsection
