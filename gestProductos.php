
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
            <a href="carrito.php" class="btn-carrito"><i class="fa fa-shopping-cart" aria-hidden="true"> </i></a>
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

                  <h1>REGISTRAR PRODUCTO</h1>
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

                  <h1> MODIFICAR PRODUCTO</h1>

                    <label for="name">id: </label>
                    <select name="idProd" id="idProd" class="idProd">
                         
                <option value="#">SELECCIONA UN ID</option>

                <?php
                            foreach ($datos as $dat) {
                                echo '<option value="'.$dat['idproducto'].'">'.$dat['idproducto'].'</option>';
                            }//end foreach
                        ?>
                    </select>
                    
                    <label for="name">Nombre: </label>
                    <input type="text" name="txtnombre2" id="txtnombre2" class="txtnombre2">
                    <label for="name">Descripcion: </label>
                    <input type="text" name="txtdescr2" id="txtdescr2" class="txtdescr2">
                    <label for="name">Precio: </label>
                    <input type="number" name="txtprec2" id="txtprec2" class="txtprec2">
                    <label for="name">Cantidad: </label>
                    <input type="number" name="txtcant2" id="txtcant2" class="txtcant2">
                    <label for="name">Status: </label>
                    <input type="number" name="txtstatus2" id="txtstatus2" class="txtstatus2">

                
                    <input type="submit" class="btn" value="Registrar">
                 </div>
               
                
            </div>

            
            <script>

                  

                document.querySelector(".idProd").addEventListener("change", (e) =>   {
                var prd = document.querySelector(".idProd").value;
               
               
           
                <?php
           $idprd = '<script> document.write(prd) </script>';

      if ($idprd == ""){

      }else{
        $productos = "select * from productos where idproducto= '$idprd'";
        $Execute = $conexion->query($productos);
        $r = $Execute->fetchall();
        $datos = [];
        foreach($r as $row){
        $datos[] = [
            'nombre' => $row['nombre'],
            'descripcion' => $row['descripcion'],
            'precio' => $row['precio'],
            'cantidad' => $row['cantidad'],
            'status' => $row['status'],
            'imagen' => $row['imagen'],
        ];
        }

        // echo $idprd;
         

      }
            
            ?>
                 
                 document.querySelector(".txtnombre2").value= '<?php echo $row['nombre']?>';
                document.querySelector(".txtdescr2").value= '<?php echo  $row['descripcion']?>';
                document.querySelector(".txtprec2").value= '<?php echo $row['precio']?>';
                document.querySelector(".txtcant2").value= '<?php echo $row['cantidad']?>';
                document.querySelector(".txtstatus2").value= '<?php echo $row['status']?>';
                
                document.querySelector(".imagen2 .imgelg2 .img-mostrar2").innerHTML =
                        `
                        <img src="<?php echo $row['imagen']?>" alt="" class="imagenselec2" name="imagenselec2">
                    `
                } )

                

               
            </script>

           




            <div class="imagen2" >
                <div class="imgelg2" action="registrarimagen.php" method="post" >
                    <div class="img-mostrar2">
                    <img src="img/regalo.png" alt="" class="imagenselec2" name="imagenselec">
                    </div>
                    <!-- <button class="examinar">examinar</button> -->
                    <input type="file" name="img-elg2" id="img-elg2" class="img-elg2">

                    
                 </div>
              
            </div>
            
        </form> 

        <div class="tablaproducto">

        
        </div>
        
    </div>

    <footer id="pie">
        <p>made by ENVIPROPMENT</p>
    </footer>
   
    <script src="js/cookie.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/confpag.js"></script>
    <script src="PHP/Productos/modproducto.js"></script>
    <script src="PHP/Productos/regprod.js"></script>
</body>
</html>