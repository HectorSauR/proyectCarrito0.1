<?php
    require 'PHP/sesiones/comprobarSesion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuracion</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="icon" href="img/escritorio.png">
</head>
<body id="cuerpo" onload="nombuser(), cargarFontusr(),cargartemausr()">
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
        <h2>¡Configuracion!</h2>
        <div class="conten">
            <!-- Aquí se configuran los cokiees  -->
            <div class="txtcontact">
                <div class="nombre">
                    <label for="txttamletra">Tamaño de letra:</label>
                    <input class="button" type="button" value="Chico" id="fc"/> 
                    <input class="button" type="button" value="Mediano" id="fm"/>
                    <input class="button" type="button" value="Grande" id="fg"/>  
                </div>
                <div class="correo">
                    <label for="txttema">Cambiar tema: </label>
                        <!-- Los colores son de ejemplo, puedes poner otros -->
                    <input class="button" type="button" value="TEMA1(ROJO)" id="tr"/> 
                    <input class="button" type="button" value="TEMA2(AZUL)" id="ta"/>
                    <input class="button" type="button" value="TEMA3(VERDE)" id="tv" />  
                </div>
                
                
            </div>
            <input class="button" type="button" value="Default" id="btn-defaultconf"/> 
            <!-- En está parte ira el total del precio y el total de los productos seleccionados  -->
            <form >
                
            </form>
            

        </div>
    </main>
    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>
    <script src="js/cookie.js"></script>
    <script src="js/programa.js"></script>
    
    <script src="js/ususarios.js"></script>
    <script src="js/configuracion.js"></script>
</body>
</html>