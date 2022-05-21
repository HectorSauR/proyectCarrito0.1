
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/registrar.css">
</head>
<body>
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
                    <li><a href="#" id="cerrar-sesion">CERRAR SESION </a></li>
                    <li><a href="configuration.html">CONFIGURACION</a></li>
                  </ul>
                </li>
            </ul>
        </div>
        <div class="contenedor-abajo" id="contenedor-abajo">
            <a href="carrito.php" class="btn-carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="contacto.html">Contacto</a></li>
            </ul>
        </div>
    </header>   
    <main class="main">
        <div class="conten1">
            <form class="contenido" action="PHP/productos/registrarproducto.php" method="post" enctype="multipart/form-data">
                <h1 class="titulo">REGISTRAR PRODUCTO</h1>
                <div class="inputRegistrar">
                    <!-- <div class="textos"> -->
                        <label for="name">Nombre: </label>
                        <input type="text" name="txtnombre" id="txtnombre">
                        <label for="name">Descripcion: </label>
                        <textarea name="txtdescr" id="txtdescr" class="textDescripcion"></textarea>
                        <label for="name">Precio: </label>
                        <input type="number" name="txtprec" id="txtprec" required autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1">
                        <label for="name">Cantidad: </label>
                        <input type="number" name="txtcant" id="txtcant" required autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1">
                        <!-- </div> -->
                </div>
                <div class="imagen">
                    <div class="imgelg" action="registrarimagen.php" method="post">
                        <div class="img-mostrar">
                            <img src="img/regalo.png" alt="" class="imagenselec" name="imagenselec" width="200px" height="200px">
                        </div>
                        <!-- <button class="examinar">examinar</button> -->
                        <input type="file" name="img-elg" id="img-elg" class="img-elg">
                    </div>
                </div>
                <input type="submit" class="btn" value="Registrar">
            </form>
        </div>
        <h2 class="listProd">Lista de productos</h2>
        <div class="conten">
            <div class="buscador">
                <h1>Buscar:</h1>
                <input type="text" name="buscar" id="buscar" class="buscar">
            </div>
            <table id="tabla">
                <thead>
                    <th>Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Existencia</th>
                    <th>Precio</th>
                    <th></th>
                </thead>
                <tbody id="contenido-tabla">
                    <?php
                        require 'productos.php';
        
                        crearTablaProductos($result);
                    ?>
                </tbody>
            </table>
        </div>

    </main>

    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/confpag.js"></script>
    <script src="js/modificarProducto.js"></script>
    <!-- <script src="PHP/Productos/modproducto.js"></script> -->
    <script src="PHP/Productos/regprod.js"></script>
</body>
</html>