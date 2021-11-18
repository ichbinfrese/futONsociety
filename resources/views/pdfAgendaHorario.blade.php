<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FutON - Relatório de dados</title>
</head>
<body>
    <center><h1 style="color: #00A859;"><b>FutON</b></center></h1>

    <h3 style="color: #FFCC29;"><b>Relatório de listagem de dados referentes à agenda de reserva de horários da arena municipal de futebol society FutON</b></h3>

@foreach ($agendahorario as $agendahorario)<br>
    <h4 style="color: #3E4095;">ID: {{$agendahorario->id}}</h4>
    <h4>Título: {{$agendahorario->titulo}}</h4>
    <h4>Dia: {{$agendahorario->dia}}</h4>
    <h4>Horário: {{$agendahorario->horario}}</h4>
    <h4>Jogador responsável: {{$agendahorario->jogador->nome}}</h4>
    <h4>Bola usada: {{$agendahorario->bola->nome}}</h4>
    <h4>Quadra reservada: {{$agendahorario->quadra->nome}}</h4>

    <hr style="color: #00A859;"><hr style="color: #FFCC29;"><hr style="color: #3E4095;">

@endforeach

</body>

</html>
