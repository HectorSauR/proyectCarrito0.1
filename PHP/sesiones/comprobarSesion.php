<?php	
    session_start();

    $usr = $_SESSION['usuario'];
    $nivel = $_SESSION['nivel'];
    
    if($usr == "" || $usr == null){
        header("Location:login.php");
    }


    function navegaciónAdmin($nivel){
        if($nivel != "1"){
            ?>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <?php
        }else{
            ?>
            <li><a href="registrarModificarProducto.php">PRODUCTOS</a></li>
            <li><a href="inicio.php">Inicio</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <?php
        }

        

    }

    function opcionesAdmin($nivel){
        if($nivel != "1"){
            ?>
            <li><a href="PHP/sesiones/cerrarSesion.php" id="cerrar-sesion">CERRAR SESION</a></li>
            <li><a href="configuration.php">CONFIGURACION</a></li>
            <?php
        }else{
            ?>
            <li><a href="cerrarSesion.php" id="cerrar-sesion">CERRAR SESION</a></li>
            <li><a href="configuration.php">CONFIGURACION</a></li>
            <li><a href="modDatosadmin.php">DATOS DE CUENTA</a></li>
            <?php
        }
        
        
    }



?>