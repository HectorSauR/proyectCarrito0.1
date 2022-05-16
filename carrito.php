<?php

?>
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
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/carrito.css">
</head>
<body onload="obtenerDatosProducto(), nombuser(), cargarFontusr(),cargartemausr()"  id="cuerpo">
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
    <main>
        <h2>¡Carrito de compra!</h2>
        <div class="conten">
            <table id="tabla">
                <thead>
                    <th>Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                </thead>
                <tbody id="contenido-tabla" class="tabla1">
                    <!-- <tr>
                        <td><img src="img/producto1.png" alt=""></td>
                        <td><p>Teclado gaming</p></td>
                        <td><p>El teclado mecánico gaming Yeyian Spark Serie 2000 de 88 teclas - switch rojo - tecnología Anti-Ghosting y N-Key Rollover, esta diseñado con funciones innovadoras y avanzada technologia para tus intensas batallas durante largas horas de juego. </p></td>
                        <td class="cantidad">
                            <a href="#" class="btn-amuentar"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
                            <p>3</p>
                            <a href="#" class="btn-decrementar"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                        </td>
                        <td><p>900</p></td>
                        <td><a href="#" class="btn-borrar"><i class="fa fa-minus-square" aria-hidden="true"></i></a></td>
                    </tr> -->
                </tbody>
            </table>
            <!-- <input type="text" id="valorPHP" value="" style="display: none;"> -->
            <p class="total-pagar">$0</p>
            <a href="#" class="btn-confirmar-compra">
                <i class="fa fa-check-square" aria-hidden="true"></i>
                Confirmar Compra
            </a>
            <div class="overlay">
                <div class="pop-up">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times"></i></a>
                    <h3 class="mensaje">
                        Producto Eliminado Exitosamente del Carrito!
                    </h3>
                    <div class="barra"></div>
                </div>
            </div>
        </div>
        <h2>Productos Disponibles</h2>
        <div class="conten">
            <table id="tabla">
                <thead>
                    <th>Producto</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Existencia</th>
                    <th>Precio</th>
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
    <script src="js/programa.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/confCarrito.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/confpag.js"></script>
    <script src="js/popup.js"></script>

</body>
</html>