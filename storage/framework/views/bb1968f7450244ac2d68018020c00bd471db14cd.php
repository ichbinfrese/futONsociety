<?php $__env->startSection('title', 'FutON - Edição de horários reservados'); ?>

<body>
    <?php $__env->startSection('content'); ?>
    <br><br>

    <h3 style="color: #c5c5c5;"><b>FutON</b><i class="fas fa-futbol" style="color: #7092ff;"></i><i class="fas fa-futbol" style="color: #F4E285;"></i><i class="fas fa-futbol" style="color: #78A25E;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

    <br><br>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

    <form action="<?php echo e(action('App\Http\Controllers\AgendaHorarioController@salvar', $agendahorario->id)); ?>" method="post" style="color: #ffffff;">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-row">
            <div class="form-group col-md-8">
        <label>Título <i class="fas fa-keyboard" style="color: #7092ff;"></i></label>
        <textarea name="titulo" class="form-control" value="<?php echo e($agendahorario->titulo); ?>"></textarea>
    </div></div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label>Dia <i class="fas fa-calendar-day" style="color: #F4E285;"></i></label>
        <input type="date" name="dia" class="form-control" value="<?php echo e($agendahorario->dia); ?>">
    </div></div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label>Horário <i class="fas fa-clock" style="color: #78A25E;"></i></label>
        <input type="time" name="horario" class="form-control"value="<?php echo e($agendahorario->horario); ?>">
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-8">
        <label>Jogador responsável <i class="fas fa-running" style="color: #7092ff;"></i></label>
        <select name="id_jogador" class="form-control">
            <?php $__currentLoopData = $jogadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"
            <?php if($item->id == old('id_jogador', $agendahorario->id_jogador)): ?>
                selected="selected"
            <?php endif; ?>
            ><?php echo e($item->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </div></div>
        <div class="form-row">
    <div class="form-group col-md-8">
        <label>Bola usada <i class="fas fa-futbol" style="color: #F4E285;"></i></label>
        <select name="id_bola" class="form-control">
            <?php $__currentLoopData = $bolas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"
            <?php if($item->id == old('id_bola', $agendahorario->id_bola)): ?>
                selected="selected"
            <?php endif; ?>
            ><?php echo e($item->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-8">
        <label>Quadra reservada <i class="fas fa-map-marker-alt" style="color: #78A25E;"></i></label>
        <select name="id_quadra" class="form-control">
            <?php $__currentLoopData = $quadras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($item->id); ?>"
            <?php if($item->id == old('id_quadra', $agendahorario->id_quadra)): ?>
                selected="selected"
            <?php endif; ?>
            ><?php echo e($item->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div></div>

    <div class="btn-group" role="group" aria-label="Exemplo básico">
        <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
        <a href="/agendahorario" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
      </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/horario/horarioEditar.blade.php ENDPATH**/ ?>