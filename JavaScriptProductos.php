<?php
    session_start();

    $usr = $_SESSION['usuario'];
    $nivel = $_SESSION['nivel'];
    
    if($usr == "" || $usr == null){
        header("Location:login.php");
    }
    
    require 'PHP/conexion/conexion.php';

    $query = 'SELECT * FROM `productos` Where status = 1;';
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
            'imagen' => $row['imagen']);
    }

    echo json_encode($datos);
?>