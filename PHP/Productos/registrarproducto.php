<?php

require '../conexion/conexion.php';

$nombre = $_POST['txtnombre'];
$descr = $_POST['txtdescr'];
$precio = $_POST['txtprec'];
$cantidad = $_POST['txtcant'];

$imagen = $_FILES['img-elg'];

$extension = pathinfo("../../img/Productos/".$nombre."/".$imagen["name"], PATHINFO_EXTENSION);
$pathimg = "../../imag/productos/".$nombre."/".$nombre.".".$extension;

if($nombre ==""  || $descr=="" || $precio=="" || $cantidad==""){
  echo "<script> alert('VERIFICA SI LOS DATOS ESTAN CORRECTOS PORFAVOR');
  location.href='../../gestProductos.php';
  </script>";
  return;
}




$regproducto = "INSERT INTO productos VALUES (?,?,?,?,?,?,?)";
$consulta = $conexion->prepare($regproducto);
$arregloprod = array(null,$nombre,$descr,$precio,$cantidad,1,$pathimg);
$res = $consulta->execute($arregloprod);
//$regproducto = "INSERT INTO productos VALUES ('$nombre','$decripcion','$descr','$precio','$cantidad','$cantidad','$unidadM','$status')";
//$Execute = $conexion->query($regproducto);


if($res)
{
    
    echo "<script> alert('correcto');
    location.href='../../gestProductos.php';
    </script>";
 
  $fileContent = file_get_contents($imagen['tmp_name']);
  $path = "../../img/productos/".$nombre;
  if (!file_exists($path)) {
  mkdir($path, 0777, true);
    
  //OBTENER EXTENCION DE IMAGEN
  //ALMACENA LA IMAGEN EN EL SERVIDOR
  file_put_contents("../../img/productos/".$nombre."/".$nombre.".".$extension,$fileContent);

  }
}else{
    echo "<script> alert('MAL');
    </script>";
}





?>
