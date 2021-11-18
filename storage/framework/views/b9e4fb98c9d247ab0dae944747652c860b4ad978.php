<?php $__env->startSection('title', 'FutON - Edição de horários reservados'); ?>

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

<form action="<?php echo e(action('App\Http\Controllers\AgendaHorarioController@save', $agendahorario->id)); ?>" method="post" style="color: #000000;">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="form-row">
    <div class="form-group col-md-8">
        <label>Título </label>
            <input name="titulo" class="form-control" value="<?php echo e($agendahorario->titulo); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Dia </label>
            <input type="date" name="dia" class="form-control" value="<?php echo e($agendahorario->dia); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Horário </label>
            <input type="time" name="horario" class="form-control"value="<?php echo e($agendahorario->horario); ?>">
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Jogador responsável </label>
            <select name="id_jogador" class="form-control">
                <?php $__currentLoopData = $jogadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"
                        <?php if($item->id == old('id_jogador', $agendahorario->id_jogador)): ?>
                            selected="selected"
                        <?php endif; ?>
                    ><?php echo e($item->nome); ?></option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Bola usada </label>
            <select name="id_bola" class="form-control">
                <?php $__currentLoopData = $bolas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"
                        <?php if($item->id == old('id_bola', $agendahorario->id_bola)): ?>
                            selected="selected"
                        <?php endif; ?>
                    ><?php echo e($item->nome); ?> - <?php echo e($item->marca); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-8">
        <label>Quadra reservada </label>
            <select name="id_quadra" class="form-control">
                <?php $__currentLoopData = $quadras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"
                    <?php if($item->id == old('id_quadra', $agendahorario->id_quadra)): ?>
                        selected="selected"
                    <?php endif; ?>
                ><?php echo e($item->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
</div>
</div>

<div class="btn-group" role="group" aria-label="Exemplo básico">
    <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
    <a href="/agendahorario" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
</div>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/horario/horarioEdit.blade.php ENDPATH**/ ?>