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
    <link rel="stylesheet" href="css/paginacion.css">
</head>
<body onload="nombuser(), cargarFontusr(),cargartemausr()" id="cuerpo">
    <header>
        <div class="contenedor-arriba" id="contenedor-arriba">
            <a href="inicio.php" class="btn-nombre"><h1>ENVIPROPMENT</h1></a>
            <div class="contenedor-busqueda">
                <a href="#" class="btn-busqueda"><i class="fa fa-search" aria-hidden="true"></i></a>
                <input type="text" name="buscador" id="buscador" class="buscador" placeholder="Busca un producto aqui...">
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
            <div class="contenedor-productos principal active" id="contenedor-productos" id-obj="1">
            </div>
            <div class="contenedor-productos busqueda" id="contenedor-productos" id-obj="1">
            </div>
            <ul class="paginacion">
            </ul>
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
    <script src="js/btnBusqueda.js"></script>
    <script src="js/productos.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/confpag.js"></script>
   
</body>
</html>