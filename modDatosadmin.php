<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/datosadmin.css">
    <title>Document</title>
</head>
<body onload="nombuser(), cargarFontusr(),cargartemausr()" id="cuerpo">
    


<header>
        <div class="contenedor-arriba" id="contenedor-arriba">
            <a href="inicio.php" class="btn-nombre"><h1>ENVIPROPMENT</h1></a>
            <div class="contenedor-busqueda">
                <a href="#" class="btn-busqueda"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            
            <ul class="nav">
                <li>
                    <a href="#" class="btn-usuario"><span class="usuario">Nombre</span><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                  <ul>
                    <li><a href="pract9.php" id="cerrar-sesion">CERRAR SESION </a></li>
                    <li><a href="configuration.html">CONFIGURACION</a></li>
                  </ul>
                </li>
            </ul>
           
        </div>
        <div class="contenedor-abajo" id="contenedor-abajo">
            <a href="carrito.html" class="btn-carrito"><i class="fa fa-shopping-cart" aria-hidden="true"> </i></a>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </div>
    </header>
    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>

<div class="main">
 
<form class="contenido" action="PHP/modificarUsuario/modua.php" method="post">
            
            <div class="input">
               
              <div  class="textos">

                  <h1>MODIFICAR DATOS DE CUENTA</h1>
                    <label for="name">Nombre: </label>
                    <input type="text" name="txtnombre" id="txtnombre">
                    <label for="name">Edad: </label>
                    <input type="text" name="txtedad" id="txtedad">
                    <label for="name">Email: </label>
                    <input type="email" name="txtemail" id="txtemail">
                    <label for="name">Usuario: </label>
                    <input type="text" name="txtusuario" id="txtusuario">
                    <label for="name">Password: </label>
                    <input type="password" name="txtpasword" id="txtpassword">
                    
                   
                    <input type="submit" class="btn" value="Registrar">
                 </div>
               
                
            </div>

            
            
        </form> 

</div>
   

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/confpag.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/admin.js"></script>


    
</body>
</html>