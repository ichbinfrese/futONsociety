@extends('layouts.app')

@section('title', 'FutON - Home')

@section('content')

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #FFFFFF;">Agenda de reserva de horários</h3>
        <a href="/agendahorario" class="btn btn-dark">Vamos lá!</a>
</div>
</div>

<br>

<div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #FFFFFF;">Quadras</h3>
        <a href="/quadra" class="btn btn-dark">Vamos lá!</a>
</div>
</div>

<br>

<div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #FFFFFF;">Bolas</h3>
        <a href="/bola" class="btn btn-dark">Vamos lá!</a>
</div>
</div>

<br>

<div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #FFFFFF;">Jogadores</h3>
        <a href="/jogador" class="btn btn-dark">Vamos lá!</a>
</div>
</div>

<br>

<div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #FFFFFF;">Funcionários</h3>
        <a href="/funcionario" class="btn btn-dark">Vamos lá!</a>
</div>
</div>

@endsection
