<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Document</title>
</head>

<body>

    <header>
        <div class="contenedor-arriba">
            <a href="pract9.php?opc=1" class="btn-nombre">
                <h1>ENVIPROPMENT</h1>
            </a>
            <div class="contenedor-busqueda">
                <a href="#" class="btn-busqueda"><i class="fa fa-search" aria-hidden="true"></i></a>
            </div>

            <ul class="nav">
                <li>
                    <a href="#" class="btn-usuario"><span class="usuario">Nombre</span><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                    <ul>
                        <li><a href="pract9.php?opc=2">REGISTRAR </a></li>
                        <li><a href="Pract9.php?opc=3">CONFIGURACION</a></li>
                    </ul>
                </li>
            </ul>

        </div>

        <div class="contenedor-abajo">
            <a href="pract9.php?opc=4" class="btn-carrito"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <ul>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="pract9.php?opc=5">Contacto</a></li>
            </ul>
        </div>
    </header>

    <form action="pract9.php" method="get">

        <?php

        if (isset($_GET["opc"])) {

            $valor = $_GET["opc"];
            if ($valor == 1) {
                include("inicio.php");
            } else if ($valor == 2) {
                include("registro.html");
            } else if ($valor == 3) {
                include("configuration.html");
            } else if ($valor == 4) {
                include("carrito.php");
            } else if ($valor == 5) {
                include("contacto.html");
            }
        } else {


        ?>
    </form>
    <main>
        <div class="login">
            <form action="PHP/ususariobusqueda/usuariosbusc.php" method="post" class="formusuario">
                <h4>LOGIN</h4>
                <label for="txtusuario">Usuario</label>
                <input type="text" name="txtusuarioL" id="txtusuarioL" size="20" required placeholder="Ingrese usuario">
                <br>
                <label for="txtcontr">Contraseña</label>
                <input type="password" name="txtcontrL" id="txtcontrL" size="20" required placeholder="Ingrese contraseña">
                <br>
                <a href="registro.html">No estas registrado?, registrate aquí</a>
                <input type="submit" value="Ingresar" id="btn-login">
                <input type="reset" value="Limpiar">
            </form>

        </div>
    </main>
    <!-- <button id="agregar">Agregar</button> -->
    <footer>
        <p>made by ENVIPROPMENT</p>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/login.js"></script>
    <script src="js/ususarios.js"></script>

<?php
        }
?>



<!-- <script src="js/productos.js"></script> -->

</body>

</html>