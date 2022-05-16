<?php
$host = "localhost";
$user = "root";
$clave = "";
$bd  = "bd_alan";

$conectar = mysqli_connect($host,$user,$clave,$bd);

//require '../conectar/conectar.php';

$nombre = $_POST['txtnombre'];
$edad = $_POST['txtedad'];
$email = $_POST['txtemail'];
$usuario = $_POST['txtusuario'];
$contraseña = $_POST['txtpasword'];
$imagen = $_FILES['img-elg'];






    if ($nombre<>""){
        
        mysqli_query($conectar,"UPDATE usuario SET nombre='$nombre' WHERE idusuario = '1'");
    }
    
    if ($edad<>""){
       mysqli_query($conectar,"UPDATE usuario SET edad='$edad' WHERE idusuario = '1'");
    }
    
    if ($email<>""){
        mysqli_query($conectar,"UPDATE usuario SET email='$email' WHERE idusuario = '1'");
    }
    
    if ($usuario<>""){
       mysqli_query($conectar,"UPDATE usuario SET usuario = '$usuario' WHERE idusuario = '1'");

       ?>

    <script src='../../js/cookie.js'></script>


     <script> var usc = new cookie();
    let us = '<?php echo  $usuario ?>'; 
    usc.setNombre('uslogueado');
    let uss=usc.obtenerDato;
    usc.setNombre(uss);
    let contr =usc.obtenerDato;
    usc.borrarCookie();
    usc.setValoresCookie(us, contr, 1);
    usc.setValoresCookie('uslogueado', us, 1);
    
    
    </script>
       
       <?php
    }
    
    if ($contraseña<>""){
       mysqli_query($conectar,"UPDATE usuario SET contraseña='$contraseña' WHERE idusuario = '1'");


       ?>

<script src='../../js/cookie.js'></script>
        <script> 
        var usc = new cookie();
        usc.setNombre('uslogueado');
        var uss= usc.obtenerDato;
        let contr = '<?php echo  $contraseña ?>';
        usc.setValoresCookie(uss, contr, 1);</script>

       <?php
    }

    if ($imagen["name"]<>""){

      $extension = pathinfo("../../img/usuario/".$nombre."/".$imagen["name"], PATHINFO_EXTENSION);
      $fileContent = file_get_contents($imagen['tmp_name']);
      $pathimg = "  img/usuario/".$nombre."/".$nombre.".".$extension;
      $path = "../../img/usuario/".$nombre;

      if (!file_exists($path)) {
      mkdir($path, 0777, true);
      file_put_contents("../../img/usuario/".$nombre."/".$nombre.".".$extension,$fileContent);
      $modificar=mysqli_query($conectar,"UPDATE usuario SET imagen='$pathimg' WHERE idusuario = '1'");
  }else{

  if (!file_exists($pathimg)){
     // $old = getcwd(); 
     // chdir($path);
     // unlink($nombre.".".$extension);
     // chdir($old); 
      file_put_contents("../../img/usuario/".$nombre."/".$nombre.".".$extension,$fileContent);
      $modificar=mysqli_query($conectar,"UPDATE usuario SET imagen='$pathimg' WHERE idusuario = '1'");
  }
  else {
      $old = getcwd(); 
      chdir($path);
      unlink($nombre.".".$extension);
      chdir($old); 
      file_put_contents("../../img/usuario/".$nombre."/".$nombre.".".$extension,$fileContent);
      $modificar=mysqli_query($conectar,"UPDATE usuario SET imagen='$pathimg' WHERE idusuario = '1'");
  }
  
}
 
 
}
    


     echo "<script>
     location.href='../../modDatosadmin.php';
    </script>";
?>


