
<?php $__env->startSection('s1'); ?>
<div id="app">
        <style>
        table {
    border-collapse: collapse;
    border-radius: 1em;
    overflow: hidden;
  }
  
  th, td {
    padding: 1em;
    border-bottom: 4px solid rgb(0, 0, 0); 
  }
  .navbar-brand{
    color: #fff;
    font-size: 20px;
    list-style: none;
}

.nav{
    width: 100%;
}
.nav li a{
    color: #ffffff;
    width: 180px;
    text-align: center;
    font-size: 15px;
}
.nav li a:hover{
    background-color: rgba(57, 119, 100, 0.788);
    font-size: 16px;
}
        </style>

        <header class="container bg-success">
 <h2 class="text-center text-light display-4">COMUNIDAD DE PRODUCTOS</h2>
    <nav class="navbar navbar-expand-sm">
           
        <div class="collapse navbar-collapse justify-content-center" id="Mymenu">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/productos">Lista</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/productos/crear">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/carrito">Carrito</a>
                </li>
                
            </ul>
        </div>
    </nav>
</header>
        
        <div class="container">
            <div class="row mt-3 ">
                <div class="col-lg-6">
                    <h3 class="text-center" id="sub1"> PRODUCTOS REGISTRADOS</h3>
                </div>
            </div>
            <?php if(!empty($cadena)): ?>
                <div class="alert alert-success alert-dismissable">
                <strong><?php echo e($cadena); ?></strong>
                </div>
            <?php endif; ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center table-success">
                            <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($producto->id); ?></td>
                                    <td><?php echo e($producto->name); ?></td>
                                    <td><?php echo e($producto->categoria); ?></td>
                                    <td><?php echo e($producto->precio); ?></td>
                                        <td>
                                        <a href="/productos/detalle/<?php echo e($producto->id); ?>">Ver</a>
                                        <a href="/productos/editar/<?php echo e($producto->id); ?>">Editar</a>
                                        <a href="/productos/eliminar/<?php echo e($producto->id); ?>">Eliminar</a>
                                        </td>
                                </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/productos/lista.blade.php ENDPATH**/ ?>