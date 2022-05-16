<?php

require "../conexion/conexion.php";

$dato = json_decode(file_get_contents('php://input'),true);

// print_r ($dato);

$nombre = $dato["nombre"];

$productos = "select * from usuario where usuario= '$nombre'";
$Execute = $conexion->query($productos);
$r = $Execute->fetchall();


foreach($r as $row){
    $datos = [
        'id' => $row['idusuario'],
        'nombre' => $row['nombre'],
        'edad' => $row['edad'],
        'email' => $row['email'],
        'usuario' => $row['usuario'],
        'contraseña' => $row['contraseña'],
        'nivel' => $row['nivel'],
        'imagen'=> $row['imagen'],
    ];
}

echo json_encode($datos);
?>


