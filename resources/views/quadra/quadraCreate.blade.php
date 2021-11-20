@extends('layouts.app')

@section('title', 'FutON - Cadastro de quadras da arena')

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

<form action="{{ action('App\Http\Controllers\QuadraController@save', 0) }}" method="post" style="color: #000000;">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nome </label>
            <input type="text" name="nome" class="form-control" value="{{ old ('nome') }}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Cor do gramado </label>
            <input type="text" name="cor_gramado" class="form-control" value="{{ old ('cor_gramado') }}">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Funcionário responsável </label>
            <select name="id_funcionario" class="form-control">
                <option value="selected" disabled selected >Selecione o funcionário responsável pela quadra</option>
                    @foreach ($funcionarios as $item)
                    <option value="{{$item->id}}" @if($item->id== old('id_funcionario'))  selected="selected" @endif> {{$item->nome}}</option>
                    @endforeach
                </select>
</div>
</div>

<div class="btn-group" role="group" aria-label="Exemplo básico">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
    <a style="background-color:white; border-color:black; color:black" href="/quadra" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
</div>

</form>

@endsection

