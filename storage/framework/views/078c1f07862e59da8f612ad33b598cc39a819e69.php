<?php $__env->startSection('title', 'FutON - Listagem de bolas da arena'); ?>

<body>

<?php $__env->startSection('content'); ?>

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<form action="<?php echo e(action('App\Http\Controllers\BolaController@search')); ?>" method="post">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="form-row">
    <div class="col-6">
        <input style="background-color:white; border-color:black; color:black" type="text" style="color: black" class="form-control" placeholder="Digite o nome da bola que deseja buscar" name="nome" id="">
</div>

<div class="col-6">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-outline-primary"> <i class="fas fa-search"></i> Buscar</button>
    <a style="background-color:white; border-color:black; color:black" href="<?php echo e(url('/bola/create')); ?>" class="btn btn-outline-success"> <i class="fas fa-plus"></i> Cadastrar</a>
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
    <?php $__currentLoopData = $bolas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->nome); ?></td>
            <td><?php echo e($item->marca); ?></td>
            <td><?php echo e($item->composicao); ?></td>
            <td><?php echo e($item->circunferencia); ?></td>

        <td><a href="<?php echo e(action('App\Http\Controllers\BolaController@edit',$item->id )); ?>" style='color: black;' ><i class='fas fa-user-edit'></i></a> </td>
        <td><a href="<?php echo e(action('App\Http\Controllers\BolaController@delete',$item->id )); ?>"style='color: black;'><i class='fas fa-trash-alt'></i></a> </td>
 </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/bola/bolaList.blade.php ENDPATH**/ ?>