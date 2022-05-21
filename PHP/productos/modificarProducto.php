<?php
    $datos = json_decode(file_get_contents('php://input'),true);


    // print_r($datos);
    
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd  = "bd_alan";
    
    $idpr = $datos['id'];
    $nombre = $datos['nombre'];
    $descr = $datos['desc'];
    $precio = $datos['precio'];
    $cantidad = $datos['cantidad'];
    $status = $datos['status'];
    $imagen = $datos['imagen'];
    
    print_r($imagen);

    // $conectar = mysqli_connect($host, $user, $clave, $bd);
    
    // if ($nombre <> "") {
    //     $modificar = mysqli_query($conectar, "UPDATE productos SET nombre='$nombre' WHERE idProducto = '$idpr'");
    // }
    
    // if ($descr <> "") {
    //     $modificar = mysqli_query($conectar, "UPDATE productos SET descripcion='$descr' WHERE idProducto = '$idpr'");
    // }
    
    // if ($precio <> "") {
    //     $modificar = mysqli_query($conectar, "UPDATE productos SET precio='$precio' WHERE idProducto = '$idpr'");
    // }
    
    // if ($cantidad <> "") {
    //     $modificar = mysqli_query($conectar, "UPDATE productos SET cantidad='$cantidad' WHERE idProducto = '$idpr'");
    // }
    
    // if ($status <> "") {
    //     $modificar = mysqli_query($conectar, "UPDATE productos SET status='$status' WHERE idProducto = '$idpr'");
    // }
    
    // if ($imagen <> "") {
        
    //     $path = "../../img/productos/" . $nombre;

    //     if (!file_exists($path)) {
    //         mkdir($path, 0777, true);
    //         file_put_contents("../../img/productos/" . $nombre . "/" . $nombre . "." . $extension, $fileContent);
    //         $modificar = mysqli_query($conectar, "UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    //     }

    //     $extension = pathinfo("../../img/productos/" . $nombre . "/" . $imagen, PATHINFO_EXTENSION);
    //     $pathimg = "  img/productos/" . $nombre . "/" .;
        
        
        
    //     mysqli_query($conectar, "UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");


    //     $extension = pathinfo("../../img/productos/" . $nombre . "/" . $imagen, PATHINFO_EXTENSION);
    //     $pathimg = "  img/productos/" . $nombre . "/" . $nombre . "." . $extension;
    //     $path = "../../img/productos/" . $nombre;
    
    //     if (!file_exists($path)) {
    //         mkdir($path, 0777, true);
    //         file_put_contents("../../img/productos/" . $nombre . "/" . $nombre . "." . $extension, $fileContent);
    //         $modificar = mysqli_query($conectar, "UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    //     } else {
    
    //         if (!file_exists($pathimg)) {
    //             // $old = getcwd(); 
    //             // chdir($path);
    //             // unlink($nombre.".".$extension);
    //             // chdir($old); 
    //             file_put_contents("../../img/productos/" . $nombre . "/" . $nombre . "." . $extension, $fileContent);
    //             $modificar = mysqli_query($conectar, "UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    //         } else {
    //             $old = getcwd();
    //             chdir($path);
    //             unlink($nombre . "." . $extension);
    //             chdir($old);
    //             file_put_contents("../../img/productos/" . $nombre . "/" . $nombre . "." . $extension, $fileContent);
    //             $modificar = mysqli_query($conectar, "UPDATE productos SET imagen='$pathimg' WHERE idProducto = '$idpr'");
    //         }
    //     }
    // }

?>