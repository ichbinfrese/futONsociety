@extends('layouts.app')

@section('title', 'FutON - Edição de horários reservados')

<body>

@section('content')

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ action('App\Http\Controllers\AgendaHorarioController@save', $agendahorario->id) }}" method="post" style="color: #000000;">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
<div class="form-row">
    <div class="form-group col-md-8">
        <label>Título </label>
            <input name="titulo" class="form-control" value="{{$agendahorario->titulo}}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Dia </label>
            <input type="date" name="dia" class="form-control" value="{{$agendahorario->dia}}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Horário </label>
            <input type="time" name="horario" class="form-control"value="{{$agendahorario->horario}}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Jogador responsável </label>
            <select name="id_jogador" class="form-control">
                @foreach ($jogadores as $item)
                    <option value="{{ $item->id }}"
                        @if ($item->id == old('id_jogador', $agendahorario->id_jogador))
                            selected="selected"
                        @endif
                    >{{$item->nome}}</option>
                 @endforeach
            </select>
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Bola usada </label>
            <select name="id_bola" class="form-control">
                @foreach ($bolas as $item)
                    <option value="{{ $item->id }}"
                        @if ($item->id == old('id_bola', $agendahorario->id_bola))
                            selected="selected"
                        @endif
                    >{{$item->nome}} - {{$item->marca}}</option>
                @endforeach
            </select>
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Quadra reservada </label>
            <select name="id_quadra" class="form-control">
                @foreach ($quadras as $item)
                <option value="{{ $item->id }}"
                    @if ($item->id == old('id_quadra', $agendahorario->id_quadra))
                        selected="selected"
                    @endif
                >{{$item->nome}}</option>
            @endforeach
        </select>
</div>
</div>

<div class="btn-group" role="group" aria-label="Exemplo básico">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
    <a style="background-color:white; border-color:black; color:black" href="/agendahorario" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
</div>

</form>

@endsection
