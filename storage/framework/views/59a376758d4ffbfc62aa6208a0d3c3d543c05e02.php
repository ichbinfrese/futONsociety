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

<?php $__currentLoopData = $agendahorario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendahorario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><br>
    <h4 style="color: #3E4095;">ID: <?php echo e($agendahorario->id); ?></h4>
    <h4>Título: <?php echo e($agendahorario->titulo); ?></h4>
    <h4>Dia: <?php echo e($agendahorario->dia); ?></h4>
    <h4>Horário: <?php echo e($agendahorario->horario); ?></h4>
    <h4>Jogador responsável: <?php echo e($agendahorario->jogador->nome); ?></h4>
    <h4>Bola usada: <?php echo e($agendahorario->bola->nome); ?></h4>
    <h4>Quadra reservada: <?php echo e($agendahorario->quadra->nome); ?></h4>

    <hr style="color: #00A859;"><hr style="color: #FFCC29;"><hr style="color: #3E4095;">

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\futONsociety\resources\views/pdfAgendaHorario.blade.php ENDPATH**/ ?>