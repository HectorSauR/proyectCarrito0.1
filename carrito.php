<?php
    require 'PHP/sesiones/comprobarSesion.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/macro.css">
    <link rel="icon" href="img/escritorio.png">
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
                    <a href="#" class="btn-usuario"><span class="usuario"><?=$usr?></span><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                  <ul>
                    <?php
                        opcionesAdmin($nivel);
                    ?>
                  </ul>
                </li>
            </ul>
        </div>
        <div class="contenedor-abajo" id="contenedor-abajo">
            <a href="carrito.php" class="btn-carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <ul>
                <?php
                    navegaciónAdmin($nivel);
                ?>
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
                <tbody id="contenido-tabla" class="tabla1"></tbody>
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
            <div class="overlay-pago">
                <div class="pop-up">
                    <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fa fa-times"></i></a>
                    <h3 class="Mensaje">Selecciona el método de Pago</h3>
                    <div class="seleccion">
                        <input type="radio" name="metodo" id="oxxo" value="oxxo" checked>
                        <label for="oxxo">Oxxo</label>
                        <input type="radio" name="metodo" id="rBtnTarjeta" value="tarjeta">
                        <label for="tarjeta">Tarjeta</label>
                    </div>
                    <form>
                        <div class="contenedor-tarjeta">
                            <p for="txtNumeroTarjeta">Numero Tarjeta:</p>
                            <input type="text" name="txtNumeroTarjeta" id="tarjeta" class="tarjeta" maxlength="19">
                            <p for="txtNombre">Nombre Titular:</p>
                            <input type="text" name="txtName" id="nombre" class="nombre">
                            <p for="txtDate" class="txtDate">Fecha Vencimiento:</p>
                            <input type="number" name="txtMes" id="mes" class="mes" autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1" max="12">
                            <input type="number" name="txtAnio" id="anio" class="anio" autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="2022" max="2080">
                        </div>
                    </form>
                    <a href="#" class="btnConfirmar">Confirmar</a>
                </div>
            </div>
        </div>
    </main>
    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/programa.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/confCarrito.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/confpag.js"></script>
    <script src="js/macro.js"></script>
    <script src="js/popup.js"></script>

</body>
</html>