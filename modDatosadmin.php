<?php
    require 'PHP/sesiones/comprobarSesion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/registrar.css">
    
    <title>Document</title>
</head>

<body onload="nombuser(), cargarFontusr(),cargartemausr()" id="cuerpo">

    <header>
        <div class="contenedor-arriba" id="contenedor-arriba">
            <a href="inicio.php" class="btn-nombre">
                <h1>ENVIPROPMENT</h1>
            </a>
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
            <a href="carrito.php" class="btn-carrito"><i class="fa fa-shopping-cart" aria-hidden="true"> </i></a>
            <ul>
                <?php
                    navegaciónAdmin($nivel);
                ?>
            </ul>
        </div>
    </header>

    <main class="main">
        <div class="conten1">
            <form class="contenido" action="PHP/modificarUsuario/modua.php" method="post" enctype="multipart/form-data">
                <h1 class="titulo">MODIFICAR DATOS DE CUENTA</h1>
                <div class="inputRegistrar">
                        <label for="name">Nombre: </label>
                        <input type="text" name="txtnombre" id="txtnombre" class="txtnombre">
                        <label for="name">Edad: </label>
                        <input type="text" name="txtedad" id="txtedad" class="txtedad">
                        <label for="name">Email: </label>
                        <input type="email" name="txtemail" id="txtemail" class="txtemail">
                        <label for="name">Usuario: </label>
                        <input type="text" name="txtusuario" id="txtusuario" class="txtusuario">
                        <label for="name">Password: </label>
                        <input type="password" name="txtpasword" id="txtpassword" class="txtpasword">
                </div>
        
                <div class="imagen">
                    <div class="imgelg" action="registrarimagen.php" method="post">
                        <div class="img-mostrar">
                        </div>
                        <input type="file" name="img-elg" id="img-elg" class="img-elg">
                    </div>
                </div>
                <input type="submit" class="btn" value="MODIFICAR DATOS">
        
            </form>
        </div>
    </main>
    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/confpag.js"></script>
    
    <script src="js/ususarios.js"></script>
    <script src="PHP/modificarUsuario/mua.js"></script>


</body>

</html>