
<?php $__env->startSection('s1'); ?>
<section id="app">
        <header id="titulo"><h2 class="text-center text-light display-4">COMUNIDAD DE CLIENTES</h2>
        </header>
        
        <section class="container">
            <section class="row mt-3 ">
                <section class="col-lg-6">
                    <h3 class="text-center" id="sub1"> CLIENTES REGISTRADOS</h3>
                </section>
                <section class="col-lg-6">
                    <button class="btn btn-success float-right">
                        <i class="fas fa-user"></i>&nbsp;&nbsp;Registrarse                   
                    </button>
                </section>
            </section>
            
                
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center table-success">
                        <th>Numero</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente=>$detalles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <?php $__currentLoopData = $detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle=>$valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td>
                                        <?php echo e($valor); ?>

                                        </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                    <a href="/clientes/ver/<?php echo e($i++); ?>">Ver</a>
                                    <a href="">Editar</a>
                                    <a href="">Eliminar</a>
                                    </td>
                            </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
            </table>
            </section>
        </section>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views//clientes/lista.blade.php ENDPATH**/ ?>