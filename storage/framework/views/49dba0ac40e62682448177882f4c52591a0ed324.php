
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
#sub1{
    text-align:center;
}
        </style>

        <header class="container bg-success">
 <h2 class="text-center text-light display-4">COMUNIDAD DE CLIENTES</h2>
    <nav class="navbar navbar-expand-sm">
           
        <div class="collapse navbar-collapse justify-content-center" id="Mymenu">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/clientes">Lista</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes/crear">Registrar</a>
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
            <div class="row mt-3">
                <div class="col-md-6 offset-md-3">
                    <h3 class="text-center" id="sub1"> Detalle Cliente N. <?php echo e($cliente->id); ?></h3>
                    <img class="mb-3 d-block mx-auto" src="<?php echo e(asset($cliente->foto)); ?>" width=200 height=200>
                </div>
            </div>
            
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center table-success">
                            
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($cliente)): ?>

                                <tr>
                                    
                                    <td><?php echo e($cliente->name); ?></td>
                                    <td><?php echo e($cliente->apellido); ?></td>
                                    <td><?php echo e($cliente->email); ?></td>
                                    <td><?php echo e($cliente->telefono); ?></td>
                                    <td><?php echo e($cliente->direccion); ?></td>
                                        
                                </tr>
                            
                        <?php endif; ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
        
      




<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/clientes/detalle.blade.php ENDPATH**/ ?>