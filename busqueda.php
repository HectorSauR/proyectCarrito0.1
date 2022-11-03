<?php
    require 'PHP/conexion/conexion.php';

    $datos = json_decode(file_get_contents('php://input'),true);
    // print_r($datos);

    // $query = 'SELECT * FROM `productos` Where status = 1;';

    $texto = $datos["producto"];

    $query = "SELECT * FROM `productos` WHERE status = 1 AND nombre like '%$texto%';" ;

    $statement = $conexion->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();
    
    $datos = array();

    foreach($result as $row){
        $datos[] = array(
            'id' => $row['idproducto'],
            'nombre' => $row['nombre'],
            'cantidad' => $row['cantidad'],
            'descripcion' => $row['descripcion'],
            'precio' => $row['precio'],
            'imagen' => $row['imagen'],
            'status' => $row['status']);
    }

    echo json_encode($datos);
?>