<?php
    require 'PHP/conexion/conexion.php';

    $id = $_POST['id'];
    $cant = $_POST['cantidad'];
    // $json = json_encode($recv,true);

    // $existencia = True;

    // $query = 'SELECT * FROM `productos`;';
    // $statement = $conexion->prepare($query);
    // $statement->execute();
    // $result = $statement->fetchall();
    // foreach($result as $row){
    //     if($row['idproducto'] != $json['id']){
    //         continue;
    //     }

    //     if($row['cantidad'] < $json['cantidad']){
    //         echo 'Producto '+ $row['nombre'] + ' insuficiente stock';
    //         break;
    //     }
    // }

    // if($existencia){
    //     echo "1";
    // }else{
    //     echo "0";
    // }
    echo $id;
?>