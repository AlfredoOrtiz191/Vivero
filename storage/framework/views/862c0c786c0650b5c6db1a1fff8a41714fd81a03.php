
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
 <h2 class="text-center text-light display-4">COMUNIDAD DE CLIENTES</h2>
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
                    <h3 class="text-center" id="sub1"> Registra los datos</h3>
                </div>
            </div>
    <form method="post" action="<?php echo e(URL('/clientes/save')); ?>">
        <?php echo e(csrf_field()); ?>

        <label>Nombre</label>
        <input type="text" class="form-control" name="name" placeholder="Indique su nombre porfavor">
        <label>Apellido</label>
        <input type="text" class="form-control" name="apellido" placeholder="Indique su apellido porfavor">
        <label>Direccion</label>
        <input type="text" class="form-control" name="direccion" placeholder="Indique su direccion porfavor">
        <label>Telefono</label>
        <input type="number" class="form-control" name="telefono" placeholder="Indique su numero porfavor">
        <label>Correo</label><br>
        <input type="email" class="form-control" name="email" placeholder="example.com">
        <label>Contraseña</label><br>
        <input type="password" class="form-control" name="password" placeholder="Indique su contraseña porfavor"><br>
        <label>Foto</label><br>
        <input type="text" class="form-control" name="foto" placeholder="Coloque direccion de foto">
        <input type="submit" value="Guardar">


    </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/clientes/crear.blade.php ENDPATH**/ ?>