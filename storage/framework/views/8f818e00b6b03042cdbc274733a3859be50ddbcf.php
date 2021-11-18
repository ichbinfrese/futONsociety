<?php $__env->startSection('title', 'FutON - Listagem de horários reservados'); ?>

<body>

<?php $__env->startSection('content'); ?>

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<form action="<?php echo e(action('App\Http\Controllers\AgendaHorarioController@search')); ?>" method="post">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="form-row">
    <div class="col-6">
        <input type="text" class="form-control" placeholder="Digite o título da reserva de horário que deseja buscar" name="titulo" id="">
</div>

<div class="col-6">
    <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-search"></i> Buscar</button>
    <a href="<?php echo e(url('/agendahorario/create')); ?>" class="btn btn-outline-success"> <i class="fas fa-plus"></i> Cadastrar</a>
    <a href="<?php echo e(url('/pdfAgendaHorario')); ?>" class="btn btn-danger btn-lg"><i class="fas fa-file-pdf"></i></a>
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
    <?php $__currentLoopData = $agendashorarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->titulo); ?></td>
            <td><?php echo e(date( 'd/m/Y' , strtotime($item->dia))); ?></td>
            <td><?php echo e($item->horario); ?></td>
            <td><?php echo e($item->jogador->nome); ?></td>
            <td><?php echo e($item->bola->nome); ?></td>
            <td><?php echo e($item->quadra->nome); ?></td>

        <td><a href="<?php echo e(action('App\Http\Controllers\AgendaHorarioController@edit',$item->id )); ?>" style='color:orange;' ><i class='fas fa-user-edit'></i></a> </td>
        <td><a href="<?php echo e(action('App\Http\Controllers\AgendaHorarioController@delete',$item->id )); ?>"style='color:red;'><i class='fas fa-trash-alt'></i></a> </td>
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/horario/horarioList.blade.php ENDPATH**/ ?>