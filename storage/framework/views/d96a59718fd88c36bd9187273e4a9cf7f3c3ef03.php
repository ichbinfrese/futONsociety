<?php $__env->startSection('title', 'FutON - Cadastro de jogadores da arena'); ?>

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

<form action="<?php echo e(action('App\Http\Controllers\JogadorController@save', 0)); ?>" method="post" style="color: #000000;">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nome completo <i class="fas fa-quote-right" style="color: #00A859;"></i></label>
            <input type="text" name="nome" class="form-control" value="<?php echo e(old ('nome')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>CPF <i class="fas fa-fingerprint" style="color: #FFCC29;"></i></label>
            <input type="text" name="cpf" class="form-control" value="<?php echo e(old ('cpf')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Telefone <i class="fas fa-phone-alt" style="color: #3E4095;"></i></label>
            <input type="text" name="telefone" class="form-control" value="<?php echo e(old ('telefone')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Email <i class="fas fa-at" style="color: #00A859;"></i></label>
            <input type="text" name="email" class="form-control" value="<?php echo e(old ('email')); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Preferência de bola <i class="fas fa-futbol" style="color: #FFCC29;"></i></label>
            <select name="id_bola" class="form-control">
                <option value="selected" disabled selected >Selecione a bola da preferência do jogador</option>
                    <?php $__currentLoopData = $bolas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>" <?php if($item->id== old('id_bola')): ?>  selected="selected" <?php endif; ?>> <?php echo e($item->nome); ?> - <?php echo e($item->marca); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
</div>
</div>

<div class="btn-group" role="group" aria-label="Exemplo básico">
    <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
    <a href="/jogador" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
</div>

</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/jogador/jogadorCreate.blade.php ENDPATH**/ ?>