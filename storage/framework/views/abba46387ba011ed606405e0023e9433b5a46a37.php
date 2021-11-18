<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FutON - Relatório de dados</title>
</head>
<body>
    <center><h1 style="color: #7092ff;"><b>FutON</b></center></h1>

    <h3 style="color: #F4E285;"><b>Relatório de listagem de dados referentes aos funcionários da arena municipal de futebol society FutON</b></h3>

<?php $__currentLoopData = $funcionario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><br>
    <h4 style="color: #78A25E;">ID: <?php echo e($funcionario->id); ?></h4>
    <h4>Nome: <?php echo e($funcionario->nome); ?></h4>
    <h4>CPF: <?php echo e($funcionario->cpf); ?></h4>
    <h4>Telefone: <?php echo e($funcionario->telefone); ?></h4>
    <h4>Email: <?php echo e($funcionario->email); ?></h4>

    <hr style="color: #7092ff;"><hr style="color: #F4E285;"><hr style="color: #78A25E;">

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\futONsociety\resources\views/pdfFuncionario.blade.php ENDPATH**/ ?>