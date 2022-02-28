<?php $__env->startSection('admin'); ?>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/clientes">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="/provedores">Provedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="/usuarios">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" href="/productos">Productos</a>
          </li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div>
      <?php echo $__env->yieldContent('s1'); ?>
  
    </div>
    <footer class="container-fluid text-center mt-3">
            Creado por: @alfredo_ortiz129
           <br>
            Ideas creativas: yo
    </footer>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/admin.blade.php ENDPATH**/ ?>