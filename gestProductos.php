<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gestprod.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Document</title>
</head>
<body onload="nombuser(), cargarFontusr(),cargartemausr()" id="cuerpo">

<header>
        <div class="contenedor-arriba" id="contenedor-arriba">
            <a href="inicio.html" class="btn-nombre"><h1>ENVIPROPMENT</h1></a>
            <div class="contenedor-busqueda">
                <a href="#" class="btn-busqueda"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
            
            <ul class="nav">
                <li>
                    <a href="#" class="btn-usuario"><span class="usuario">Nombre</span><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                  <ul>
                    <li><a href="pract9.php" id="cerrar-sesion">CERRAR SESION </a></li>
                    <!-- <li><a href=".html" id="cerrar-sesion">CERRAR SESION </a></li> -->
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
    
<div class="main">
        

        <form class="contenido" action="registrarP.php" method="post" enctype="multipart/form-data">
            <div class="input">
               
              <div  class="textos">

                  <h1>REGISTRO DE PRODUCTO</h1>
                    <label for="name">Id categotria: </label>
                    <input type="text" name="txtcat" id="txtnom">
                    <label for="name">nombre: </label>
                    <input type="text" name="txtnom" id="txtdesc">
                    <label for="name">Precio Compra: </label>
                    <input type="text" name="txtprecc" id="txtprecc">
                    <label for="name">precio: </label>
                    <input type="text" name="txtprecv" id="txtcat">
                    <label for="name">stock: </label>
                    <input type="text" name="txtstock" id="txtcant">
                    <label for="name">Stock minimo: </label>
                    <input type="text" name="txtstockm" id="txtundm">
                    <label for="name">Estatus: </label>
                    <input type="text" name="txtstatus" id="txtstatus">
                   
                    <input type="submit" class="btn" value="Registrar">
                 </div>
               
                
            </div>

            

            <div class="imagen" >
                <div class="imgelg" action="registrarimagen.php" method="post" >
                    <div class="img-mostrar">
                    <img src="../../recursos/imagenes/regalo.png" alt="" class="imagenselec" name="imagenselec">
                    </div>
                    <!-- <button class="examinar">examinar</button> -->
                    <input type="file" name="img-elg" id="img-elg" class="img-elg">

                    
                 </div>
              
            </div>
            
        </form>   
    </div>
    <script src="js/cookie.js"></script>
    <script src="js/admin.js"></script>

</body>
</html>