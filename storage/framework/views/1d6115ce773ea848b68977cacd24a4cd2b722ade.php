<?php $__env->startSection('title', 'Petshop Lavacão'); ?>

<?php $__env->startSection('content'); ?>
<br><br>

    <h3 style="color: #c5c5c5;"><b>FutON</b><i class="fas fa-futbol" style="color: #7092ff;"></i><i class="fas fa-futbol" style="color: #F4E285;"></i><i class="fas fa-futbol" style="color: #78A25E;"></i> - Sistema de gerenciamento de arena municipal de futebol society</h3>

    <br><br>
    <img src="../img/logofutON.jpeg" width="100" height="30" alt="">

<div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #7092ff;">Agenda de reserva de horários</h3>
      <a href="/agendahorario" class="btn btn-dark">Vamos lá!</a>
    </div>
  </div>
<br>
  <div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #F4E285;">Quadras</h3>
      <a href="/quadra" class="btn btn-dark">Vamos lá!</a>
    </div>
  </div>
  <br>
  <div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #78A25E;">Bolas</h3>
      <a href="/bola" class="btn btn-dark">Vamos lá!</a>
    </div>
  </div>
  <br>
  <div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #7092ff;">Jogadores</h3>
      <a href="/jogador" class="btn btn-dark">Vamos lá!</a>
    </div>
  </div>
  <br>
  <div class="card text-center" style="background-color: #000000;">
    <div class="card-body">
      <h3 class="card-title" style="color: #F4E285;">Funcionários</h3>
      <a href="/funcionario" class="btn btn-dark">Vamos lá!</a>
    </div>
  </div>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projetoLavaCao\resources\views/home.blade.php ENDPATH**/ ?>