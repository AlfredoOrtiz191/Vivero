<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abarrotes CHUY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/baaa30bed8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Righteous&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="#">

     <style>
    body{
    font-size: 14px;
    font-family: 'Righteous', cursive;
}
body{
    background-color: #ffffff;
    width: 100%;
    height: 100%;
    font-family: 'Righteous', cursive;
}
#logo{width: 90px;}
.icono{float: right;}
header{background: rgba(255, 1, 1, 0.699) !important;}
.container-fluid{
    margin: 0%;
    padding: 0%;
}
#overlay{
            position : fixed;
            top:0;
            bottom:0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6)
        }
#titulo{
    background-color: rgba(255, 1, 1, 0.699);
    font-family: 'Permanent Marker', cursive;
font-family: 'Righteous', cursive;
}
#sub1{
    -webkit-text-stroke: 2px rgb(0, 0, 0);
  color: transparent;
    font-family: 'Permanent Marker', cursive;
font-family: 'Righteous', cursive;
}
footer{
    font-size: 1.5rem;
    background-color: rgba(37, 34, 34, 0.5);
}
table {
    border-collapse: collapse;
    border-radius: 1em;
    overflow: hidden;
  }
  
  th, td {
    padding: 1em;
    border-bottom: 4px solid rgb(0, 0, 0); 
  }
    </style>
</head>
<body>
 <header class="container-fluid">
    <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand marca" href="#"><img src="img/logo.png"  id="logo"></a>
        <div class="collapse navbar-collapse" id="Mymenu">
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="/clientes/lista">Lista</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes/crear">Crear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Adm.html">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Productos.html">Productos Stock</a>
                </li>
                
            </ul>
        </div>
    </nav>
</header>

      <div>
      <?php echo $__env->yieldContent('s1'); ?>
  
    </div>

    <footer class="container-fluid text-light text-center mt-5">
            Creado por: @alfredo_ortiz129
           <br>
            Ideas creativas: Materia Frameworks
    </footer>
</body>
</html>

    

<?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/general.blade.php ENDPATH**/ ?>