
<?php
require "PHP/productos/modprdfunciones.php";

?>
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
        

        <form class="contenido" action="PHP/Productos/registrarproducto.php" method="post" enctype="multipart/form-data">
            
            <div class="input">
               
              <div  class="textos">

                  <h1>Modificar Producto</h1>
                    <label for="name">Nombre: </label>
                    <input type="text" name="txtnombre" id="txtnombre">
                    <label for="name">Descripcion: </label>
                    <input type="text" name="txtdescr" id="txtdescr">
                    <label for="name">Precio: </label>
                    <input type="number" name="txtprec" id="txtprec">
                    <label for="name">Cantidad: </label>
                    <input type="number" name="txtcant" id="txtcant">
                   
                    <input type="submit" class="btn" value="Registrar">
                 </div>
               
                
            </div>

            

            <div class="imagen" >
                <div class="imgelg" action="registrarimagen.php" method="post" >
                    <div class="img-mostrar">
                    <img src="img/regalo.png" alt="" class="imagenselec" name="imagenselec">
                    </div>
                    <!-- <button class="examinar">examinar</button> -->
                    <input type="file" name="img-elg" id="img-elg" class="img-elg">

                    
                 </div>
              
            </div>
            
        </form> 
        

        <form class="contenido2" action="PHP/Productos/modpro.php" method="post" enctype="multipart/form-data">
            
            <div class="input2">
               
              <div  class="textos2">

                  <h1>Registrar Producto</h1>

                    <label for="name">id: </label>
                    <select name="idProd" id="idProd">
                         
                <option value="#">SELECCIONA UN ID</option>

                <?php
                            foreach ($datos as $dat) {
                                echo '<option value="'.$dat['idproducto'].'">'.$dat['idproducto'].'</option>';
                            }//end foreach
                        ?>
                    </select>
                    
                    <label for="name">Nombre: </label>
                    <input type="text" name="txtnombre" id="txtnombre">
                    <label for="name">Descripcion: </label>
                    <input type="text" name="txtdescr" id="txtdescr">
                    <label for="name">Precio: </label>
                    <input type="number" name="txtprec" id="txtprec">
                    <label for="name">Cantidad: </label>
                    <input type="number" name="txtcant" id="txtcant">
                    <label for="name">Status: </label>
                    <input type="number" name="txtstatus" id="txtstatus">

                
                    <input type="submit" class="btn" value="Registrar">
                 </div>
               
                
            </div>

            

            <div class="imagen2" >
                <div class="imgelg2" action="registrarimagen.php" method="post" >
                    <div class="img-mostrar2">
                    <img src="img/regalo.png" alt="" class="imagenselec2" name="imagenselec">
                    </div>
                    <!-- <button class="examinar">examinar</button> -->
                    <input type="file" name="img-elg" id="img-elg" class="img-elg2">

                    
                 </div>
              
            </div>
            
        </form> 
        
    </div>

    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>
   
    <script src="js/cookie.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/confpag.js"></script>
    <script src="js/admin.js"></script>
    <script src="PHP/Productos/regprod.js"></script>
</body>
</html>