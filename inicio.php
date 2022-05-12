<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
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
                    <!-- <li><a href=".html" id="cerrar-sesion">CERRAR SESION </a></li> -->
                    <li><a href="configuration.html">CONFIGURACION</a></li>
                  </ul>
                </li>
            </ul>
           
        </div>
        <div class="contenedor-abajo" id="contenedor-abajo">
            <a href="carrito.php" class="btn-carrito"><i class="fa fa-shopping-cart" aria-hidden="true"> </i></a>
            <ul>
                <li><a href="#">Electrónica</a></li>
                <li><a href="#">Casa Hogar</a></li>
                <li><a href="#">Consumibles</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </div>
    </header>
    <main>
        <h2>¡Bienvenido!</h2>
        <div class="container">
            <h3>Lista de productos</h3>
            <div class="contenedor-productos" id="contenedor-productos">
                <!-- <article class="producto" id="producto">
                    <div class="contenedor-img">
                        <img src="img/producto1.png" alt="">
                    </div>
                    <div class="contenedor-descripcion">
                        <h2 id="nombre-producto">NombreProducto</h2>
                        <p class="descripcion" id="descripcion-producto">Descripción</p>
                        <p class="precio" id="precio-producto">$150</p>
                        <a href="#" class="btn-agregar-carrito" id="btn-agregar-carrito">Agregar al Carrito</a>
                    </div>
                </article> -->
                <?php 
                    require 'productos.php';
                    if($totalPaginacion == 1){
                        crearProducto($totalPaginacion,$result);
                    }else{
                        crearProductoPaginacion(1);
                    }
                    
                ?>
            </div>
            <?php
                if($totalPaginacion > 1){
                    crearPaginacion($totalPaginacion);
                }
            ?>
        </div>
        <div class="overlay">
            <div class="pop-up">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times"></i></a>
                <h3 class="Mensaje">Producto Agregado Exitosamente!</h3>
                <div class="barra"></div>
            </div>
        </div>
    </main>
    <!-- <button id="agregar">Agregar</button> -->
    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/programa.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/productos.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/confpag.js"></script>
   
</body>
</html>