<?php
    require "../conexion/conexion.php";
    
    session_start();
    
    $datos = json_decode(file_get_contents('php://input'),true);
    
    // print_r($datos);

    if($datos == ""){
        header("Location: ../../login.php");
        return;
    }

    $usr = $datos['usuario'];

    $productos = "select * from usuario where usuario = '$usr'";
    $Execute = $conexion->query($productos);
    $r = $Execute->fetchall();

    foreach($r as $row){
        if($row['usuario'] != $usr){
            continue;
        }

        if($row['contraseña'] == $datos['contra']){
            $_SESSION['usuario'] = $usr;
            $_SESSION['nivel'] = $row['nivel'];
            echo "1";
            return;
        }

    }
    echo "Usuario o contraseña incorrectas"

?>