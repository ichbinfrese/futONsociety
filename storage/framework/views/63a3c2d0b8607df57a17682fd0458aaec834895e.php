<?php $__env->startSection('title', 'FutON - Listagem de funcionários da arena'); ?>

<body>

<?php $__env->startSection('content'); ?>

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<form action="<?php echo e(action('App\Http\Controllers\FuncionarioController@search')); ?>" method="post">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="form-row">
    <div class="col-6">
        <input style="background-color:white; border-color:black; color:black" type="text" class="form-control" placeholder="Digite o nome do funcionário que deseja buscar" name="nome" id="">
</div>

<div class="col-6">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-outline-primary"> <i class="fas fa-search"></i> Buscar</button>
    <a style="background-color:white; border-color:black; color:black" href="<?php echo e(url('/funcionario/create')); ?>" class="btn btn-outline-success"> <i class="fas fa-plus"></i> Cadastrar</a>
    <a style="background-color:white; border-color:black; color:black" href="<?php echo e(url('/pdfFuncionario')); ?>" class="btn btn-danger btn-lg"><i class="fas fa-file-pdf"></i></a>
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

        <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
            !empty($item->nome_arquivo) ? $nome_arquivo = $item->nome_arquivo : $nome_arquivo = "sem imagem.png";
        ?>

        <tr>
            <td><?php echo e($item->id); ?></td>
            <td> <img src="/storage/imagem/<?php echo e($nome_arquivo); ?>" width="100px" /> </td>
            <td><?php echo e($item->nome); ?></td>
            <td><?php echo e($item->cpf); ?></td>
            <td><?php echo e($item->telefone); ?></td>
            <td><?php echo e($item->email); ?></td>

        <td><a href="<?php echo e(action('App\Http\Controllers\FuncionarioController@edit',$item->id )); ?>" style='color: black;' ><i class='fas fa-user-edit'></i></a> </td>
        <td><a href="<?php echo e(action('App\Http\Controllers\FuncionarioController@delete',$item->id )); ?>"style='color: black;'><i class='fas fa-trash-alt'></i></a> </td>
    </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/funcionario/funcionarioList.blade.php ENDPATH**/ ?>