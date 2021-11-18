<?php $__env->startSection('title', 'FutON - Cadastro de funcionários da arena'); ?>

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

    <form action="<?php echo e(action('App\Http\Controllers\FuncionarioController@salvar', 0)); ?>" method="post" style="color: #ffffff;">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome completo <i class="fas fa-quote-right" style="color: #7092ff;"></i></label>
        <input type="text" name="nome" class="form-control" value="<?php echo e(old ('nome')); ?>">
            </div></div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label>CPF <i class="fas fa-fingerprint" style="color: #F4E285;"></i></label>
        <input type="text" name="cpf" class="form-control" value="<?php echo e(old ('cpf')); ?>">
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Telefone <i class="fas fa-phone-alt" style="color: #78A25E;"></i></label>
        <input type="text" name="telefone" class="form-control" value="<?php echo e(old ('telefone')); ?>">
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Email <i class="fas fa-at" style="color: #78A25E;"></i></label>
        <input type="text" name="email" class="form-control" value="<?php echo e(old ('email')); ?>">
    </div></div>

    <div class="btn-group" role="group" aria-label="Exemplo básico">
        <button type="submit" class="btn btn-success"> <i class="fas fa-save"></i>   Salvar</button>
        <a href="/funcionario" class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</a></button>
      </div>
    </form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\futONsociety\resources\views/funcionario/funcionarioCadastrar.blade.php ENDPATH**/ ?>