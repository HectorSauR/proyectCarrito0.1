<?php
    require "PHP/conexion/conexion.php";

    $dato = json_decode(file_get_contents('php://input'),true);

    // print_r ($dato);

    $id = $dato["id"];

    $productos = "select * from productos where idproducto= $id";
    $Execute = $conexion->query($productos);
    $r = $Execute->fetchall();
    
    
    foreach($r as $row){
        $datos = [
            'nombre' => $row['nombre'],
            'descripcion' => $row['descripcion'],
            'precio' => $row['precio'],
            'cantidad' => $row['cantidad'],
            'status' => $row['status'],
            'imagen' => $row['imagen'],
        ];
    }

    echo json_encode($datos);
?>