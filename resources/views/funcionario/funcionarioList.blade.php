@extends('layouts.app')

@section('title', 'FutON - Listagem de funcionários da arena')

<body>

@section('content')

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<form action="{{ action('App\Http\Controllers\FuncionarioController@search')}}" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
<div class="form-row">
    <div class="col-6">
        <input style="background-color:white; border-color:black; color:black" type="text" class="form-control" placeholder="Digite o nome do funcionário que deseja buscar" name="nome" id="">
</div>

<div class="col-6">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-outline-primary"> <i class="fas fa-search"></i> Buscar</button>
    <a style="background-color:white; border-color:black; color:black" href="{{ url('/funcionario/create') }}" class="btn btn-outline-success"> <i class="fas fa-plus"></i> Cadastrar</a>
    <a style="background-color:white; border-color:black; color:black" href="{{ url('/pdfFuncionario') }}" class="btn btn-danger btn-lg"><i class="fas fa-file-pdf"></i></a>
</div>
</div>

</form>

<br>

<table class="table table-hover"  style="color: #000000;">
<thead>
<tr>
    <th scope="col">ID</th>
    <th scope="col">Imagem</th>
    <th scope="col">Nome </th>
    <th scope="col">CPF </th>
    <th scope="col">Telefone </th>
    <th scope="col">Email </th>
    <th scope="col">Editar</th>
    <th scope="col">Deletar</th>
</tr>
</thead>
<tbody>

        @foreach ($funcionarios as $item)
        @php 
            !empty($item->nome_arquivo) ? $nome_arquivo = $item->nome_arquivo : $nome_arquivo = "sem imagem.png";
        @endphp

        <tr>
            <td>{{$item->id}}</td>
            <td> <img src="/storage/imagem/{{$nome_arquivo}}" width="100px" /> </td>
            <td>{{$item->nome}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->email}}</td>

        <td><a href="{{ action('App\Http\Controllers\FuncionarioController@edit',$item->id )}}" style='color: black;' ><i class='fas fa-user-edit'></i></a> </td>
        <td><a href="{{ action('App\Http\Controllers\FuncionarioController@delete',$item->id )}}"style='color: black;'><i class='fas fa-trash-alt'></i></a> </td>
    </tr>

@endforeach

</table>

@endsection