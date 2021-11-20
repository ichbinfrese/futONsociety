<?php $__env->startSection('title', 'FutON - Cadastro de funcionários da arena'); ?>

<body>

<?php $__env->startSection('content'); ?>

<br>
<br>

<h3 style="color: #000000;"><b>FutON</b><i class="fas fa-futbol" style="color: #00A859;"></i><i class="fas fa-futbol" style="color: #FFCC29;"></i><i class="fas fa-futbol" style="color: #3E4095;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

<br>
<br>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(action('App\Http\Controllers\FuncionarioController@save', 0)); ?>" method="post" style="color: #000000;">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nome completo </label>
            <input type="text" name="nome" class="form-control" value="<?php echo e(old ('nome')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>CPF </label>
            <input type="text" name="cpf" class="form-control" value="<?php echo e(old ('cpf')); ?>">
</div></div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Telefone </label>
            <input type="text" name="telefone" class="form-control" value="<?php echo e(old ('telefone')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Email </label>
            <input type="text" name="email" class="form-control" value="<?php echo e(old ('email')); ?>">
</div>
</div>

<div class="btn-group" role="group" aria-label="Exemplo básico">
    <button style="background-color:white; border-color:black; color:black" type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
    <a style="background-color:white; border-color:black; color:black" href="/funcionario" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
</div>

</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/funcionario/funcionarioCreate.blade.php ENDPATH**/ ?>