
<?php
$host = "localhost";
$user = "root";
$clave = "kirihasan123";
$bd  = "bd_alan";

$conectar = mysqli_connect($host,$user,$clave,$bd);

//require '../conectar/conectar.php';
$idpr=$_POST['idProd'];
$nombre = $_POST['txtnombre'];
$descr = $_POST['txtdescr'];
$precio = $_POST['txtprec'];
$cantidad = $_POST['txtcant'];
$status = $_POST['txtstatus'];
$imagen = $_FILES['img-elg'];





    if ($nombre<>""){
        $modificar=mysqli_query($conectar,"UPDATE productos SET nombre='$nombre' WHERE idProducto = '$idpr'");
    }
    
    if ($descr<>""){
        $modificar=mysqli_query($conectar,"UPDATE productos SET descripcion='$descr' WHERE idProducto = '$idpr'");
    }
    
    if ($precio<>""){
        $modificar=mysqli_query($conectar,"UPDATE productos SET precio='$precio' WHERE idProducto = '$idpr'");
    }
    
    if ($cantidad<>""){
        $modificar=mysqli_query($conectar,"UPDATE productos SET cantidad='$cantidad' WHERE idProducto = '$idpr'");
    }
    
    if ($status<>""){
        $modificar=mysqli_query($conectar,"UPDATE productos SET status='$status' WHERE idProducto = '$idpr'");
    }
    
    if ($imagen<>""){
    
        
    $extension = pathinfo("../../img/Productos/".$nombre."/".$imagen["name"], PATHINFO_EXTENSION);
    $pathimg = "../../imag/productos/".$nombre."/".$nombre.".".$extension;
    
        $modificar=mysqli_query($conectar,"UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    }


?>