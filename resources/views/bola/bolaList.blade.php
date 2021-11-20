@extends('layouts.app')

@section('title', 'FutON - Listagem de bolas da arena')

<body>

@section('content')

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<form action="{{ action('App\Http\Controllers\BolaController@search')}}" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
<div class="form-row">
    <div class="col-6">
        <input style="background-color:white; border-color:black; color:black" type="text" style="color: black" class="form-control" placeholder="Digite o nome da bola que deseja buscar" name="nome" id="">
</div>

<div class="col-6">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-outline-primary"> <i class="fas fa-search"></i> Buscar</button>
    <a style="background-color:white; border-color:black; color:black" href="{{ url('/bola/create') }}" class="btn btn-outline-success"> <i class="fas fa-plus"></i> Cadastrar</a>
</div>
</div>
</form>
<br>

<table class="table table-hover"  style="color: #000000;">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Nome </th>
    <th scope="col">Marca </th>
    <th scope="col">Composição </th>
    <th scope="col">Circunferência </th>
    <th scope="col">Editar</th>
    <th scope="col">Deletar</th>
</tr>
</thead>
<tbody>
    @foreach ($bolas as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->marca}}</td>
            <td>{{$item->composicao}}</td>
            <td>{{$item->circunferencia}}</td>

        <td><a href="{{ action('App\Http\Controllers\BolaController@edit',$item->id )}}" style='color: black;' ><i class='fas fa-user-edit'></i></a> </td>
        <td><a href="{{ action('App\Http\Controllers\BolaController@delete',$item->id )}}"style='color: black;'><i class='fas fa-trash-alt'></i></a> </td>
 </tr>

@endforeach

</table>

@endsection
