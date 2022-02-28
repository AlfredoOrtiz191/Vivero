<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
    background-color: rgba(17, 75, 20, 0.5);
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
    font-size: 18px;
}
.btn-primary{
    border: none;
    background-color: #000;
}
input[type=text], input[type=number],select{
       width:100%;
      
       margin: 8px 0;
       display: inline-block;
       border: 1px solid #ccc;
       border-radius: 4px;
        box-sizing: border-box;
   }
   input[type=submit]{
       width:100%;
       background-color:#4CAF50;
       color: white;
       padding: 14px 20px;
       margin: 8px 0;
       border:none;
       border-radius: 4px;
       cursor: pointer;
   }
   div{
       border-radius: 5px;
       
      
   }


    </style>
</head>
<body>
 <header class="container bg-success">
 <h2 class="text-center text-light display-4">COMUNIDAD DE CLIENTES</h2>
    <nav class="navbar navbar-expand-sm">
           
        <div class="collapse navbar-collapse justify-content-center" id="Mymenu">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="/productos/lista">Lista</a>
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

      <div>
      <?php echo $__env->yieldContent('s1'); ?>
  
    </div>
    <div>
      <?php echo $__env->yieldContent('s2'); ?>
  
    </div>

    <footer class="container-fluid text-light text-center mt-5">
            Creado por: @alfredo_ortiz129
           <br>
            Ideas creativas: Materia Frameworks
    </footer>
</body>
</html>

    

<?php /**PATH C:\xampp\htdocs\Evn501_22\Proyecto1\resources\views/productos/general.blade.php ENDPATH**/ ?>