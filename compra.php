<?php
    require 'PHP/conexion/conexion.php';

    $recv = $_POST['list'];
    $json = json_encode($recv);

    $existencia = True;

    $query = 'SELECT * FROM `productos`;';
    $statement = $conexion->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();
    foreach($result as $row){
        if($row['idproducto'] != $json['id']){
            continue;
        }

        if($row['cantidad'] < $json['cantidad']){
            echo 'Producto '+ $row['nombre'] + ' insuficiente stock';
            break;
        }
    }

    echo $recv; 
?>