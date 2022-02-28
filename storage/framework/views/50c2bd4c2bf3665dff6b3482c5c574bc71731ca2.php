
<?php $__env->startSection('contentAparato'); ?>
<h1 class="mt-3 mb-4 text-center  fst-italic"><?php echo e($cadena); ?></h1>
<?php if(!empty($categorias)): ?>
    
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria => $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-xs-1" align="center">
                <img src="<?php echo e(asset('img/'.$imagen)); ?>" class="bd-placeholder-img img-thumbnail" width="180" height="180"/>

                <h2><?php echo e($categoria); ?></h2>
                <p>texto</p> 
                <p><a class="btn btn-secondary" href="/canasta">$$$</a></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php else: ?> 
    <p>No hay elementos en la lista</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('tres'); ?>
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"> ¿Qué son las plantas? <span class="text-muted" style="font-size:15px;">(Secretaría de Cultura, Recreación y Deporte, 2014)</span></h2>
        <p class="lead"> 
"Las plantas son seres vivos y autosuficientes, es decir que pueden alimentarse solas y crecer solas. Estos seres vivos pertenecen al mundo de los vegetales, pueden vivir en la tierra o en el agua, nos ofrecen sombra en los días muy soleados, y retienen el exceso de agua para que sus hojas estén siempre verdes".</p>
      </div>
      <div class="col-md-5 order-md-1 text-center">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid pl-5" src="https://d7lju56vlbdri.cloudfront.net/var/ezwebin_site/storage/images/_aliases/seo/noticias/estos-son-los-lugares-de-expansion-de-las-plantas-exoticas/5478919-1-esl-MX/Estos-son-los-lugares-de-expansion-de-las-plantas-exoticas.jpg" width="300" height="300">

      </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('cuatro'); ?>
<div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Beneficios <span class="text-muted" style="font-size:15px;">(Nociones ambientales básicas para profesores rurales y extensionistas, s.f.)</span></h2>
        <p class="lead">"La plantas nos proporcionan alimentos, medicinas, madera, combustible y fibras. Además, brindan cobijo a multitud de otros seres vivos, producen el oxígeno que respiramos, mantienen el suelo, regulan la humedad y contribuyen a la estabilidad del clima".</p>
      </div>
      <div class="col-md-5 text-center">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid pl-5" src="https://ecocosas.com/wp-content/uploads/2020/10/tipos-d-eplantas-1.jpg" width="300" height="300">

      </div>
      <?php $__env->stopSection(); ?>

<?php echo $__env->make('carrito', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/categorias.blade.php ENDPATH**/ ?>