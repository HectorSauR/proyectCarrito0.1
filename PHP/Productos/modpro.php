<?php
$host = "localhost";
$user = "root";
$clave = "";
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

echo($imagen["tmp_name"]);


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
    
    if ($imagen["name"]<>""){

        $extension = pathinfo("../../img/Productos/".$nombre."/".$imagen["name"], PATHINFO_EXTENSION);
        $fileContent = file_get_contents($imagen['tmp_name']);
        $pathimg = "  img/productos/".$nombre."/".$nombre.".".$extension;
        $path = "../../img/productos/".$nombre;

        if (!file_exists($path)) {
        mkdir($path, 0777, true);
        file_put_contents("../../img/productos/".$nombre."/".$nombre.".".$extension,$fileContent);
        $modificar=mysqli_query($conectar,"UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    }else{

    if (!file_exists($pathimg)){
       // $old = getcwd(); 
       // chdir($path);
       // unlink($nombre.".".$extension);
       // chdir($old); 
        file_put_contents("../../img/productos/".$nombre."/".$nombre.".".$extension,$fileContent);
        $modificar=mysqli_query($conectar,"UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    }
    else {
        $old = getcwd(); 
        chdir($path);
        unlink($nombre.".".$extension);
        chdir($old); 
        file_put_contents("../../img/productos/".$nombre."/".$nombre.".".$extension,$fileContent);
        $modificar=mysqli_query($conectar,"UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    }
    
  }
   
   
}

    echo "<script>location.href = '../../registrarModificarProducto.php'</script>"

?>