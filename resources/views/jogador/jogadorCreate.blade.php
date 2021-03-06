@extends('layouts.app')

@section('title', 'FutON - Cadastro de jogadores da arena')

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

<form action="{{ action('App\Http\Controllers\JogadorController@save', 0) }}" method="post" style="color: #000000;">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nome completo </label>
            <input type="text" name="nome" class="form-control" value="{{ old ('nome') }}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>CPF </label>
            <input type="text" name="cpf" class="form-control" value="{{ old ('cpf') }}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Telefone </label>
            <input type="text" name="telefone" class="form-control" value="{{ old ('telefone') }}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Email </label>
            <input type="text" name="email" class="form-control" value="{{ old ('email') }}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>PreferĂȘncia de bola </label>
            <select name="id_bola" class="form-control">
                <option value="selected" disabled selected >Selecione a bola da preferĂȘncia do jogador</option>
                    @foreach ($bolas as $item)
                    <option value="{{$item->id}}" @if($item->id== old('id_bola'))  selected="selected" @endif> {{$item->nome}} - {{$item->marca}}</option>
                    @endforeach
                </select>
</div>
</div>

<div class="btn-group" role="group" aria-label="Exemplo bĂĄsico">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
    <a style="background-color:white; border-color:black; color:black" href="/jogador" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
</div>

</form>

@endsection

