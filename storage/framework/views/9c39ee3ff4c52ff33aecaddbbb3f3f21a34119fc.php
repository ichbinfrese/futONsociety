<?php $__env->startSection('title', 'FutON - Cadastro de bolas da arena'); ?>

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

<form action="<?php echo e(action('App\Http\Controllers\BolaController@save', 0)); ?>" method="post" style="color: #000000;">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nome <i class="fas fa-quote-right" style="color: #00A859;"></i></label>
            <input type="text" name="nome" class="form-control" value="<?php echo e(old ('nome')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Marca <i class="fas fa-comment-dollar" style="color: #FFCC29;"></i></label>
            <input type="text" name="marca" class="form-control" value="<?php echo e(old ('marca')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Composição <i class="fas fa-dolly" style="color: #3E4095;"></i></label>
            <input type="text" name="composicao" class="form-control" value="<?php echo e(old ('composicao')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Circunferência <i class="fas fa-question-circle" style="color: #3E4095;"></i></label>
            <input type="text" name="circunferencia" class="form-control" value="<?php echo e(old ('circunferencia')); ?>">
</div>
</div>

<div class="btn-group" role="group" aria-label="Exemplo básico">
    <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
    <a href="/bola" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
</div>

</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/bola/bolaCreate.blade.php ENDPATH**/ ?>