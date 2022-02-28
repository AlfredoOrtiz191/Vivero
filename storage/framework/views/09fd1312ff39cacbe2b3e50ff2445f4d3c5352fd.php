
<?php $__env->startSection('s1'); ?>
<td>

<div class="container pl-5 mt-5 pl-1" id="boton">
      <div class="row text-center mt-5 container">
       
    <table class="rounded alert alert-success" border="1" id="Carrito">
     
       <tr>
          
              <th>IMAGEN</th>
              <th>NOMBRE</th>
              <th>DESCRIPCION</th>
              <th>PRECIO</th>
              <th>CANTIDAD</th>
              <th>IMPORTE</th>
              <th>ADD</th>
              <th>REDUCIR</th>
   
       </tr>
       
       <!---CART-->
       
       <tr>
         
         <td><img src="<?php echo e(asset('img/1.jpg')); ?>" width="20%"></td>
         <td>Planta sol</td>
         <td>Debe estar en sol y diario agua</td>
         <td>$35</td>
         <td>1</td>
         <td>38</td>
         <td><a href= '/carrito'><img src="<?php echo e(asset('img/mas.jpg')); ?>" width="50" height="50"></a></td>
              <th><a href= '#'><img src="<?php echo e(asset('img/menos.jpg')); ?>" width="50" height="50"></a>
        </tr>
        <!---CART-->
        </table> 
       </div>
       
          <a href= '/carrito'>Comprar Más productos</a> &nbsp; &nbsp; &nbsp;
          <a href= '#'>Vaciar la Cesta</a>
          &nbsp; &nbsp; &nbsp;
          <a href= '#'>Mostrar Resumen</a>
        
   
       </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('canasta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/productosAcomprar.blade.php ENDPATH**/ ?>