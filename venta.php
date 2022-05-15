<?php
    require 'PHP/conexion/conexion.php';

    $datos = json_decode(file_get_contents('php://input'),true);
    // print_r($datos);
    // echo json_encode($datos);
    // echo $datos[0]['id'];
    // echo count($datos);

    $query = 'SELECT * FROM `productos`;';
    $statement = $conexion->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();
    $cadena = "";
    $i = 0;
    // $datos = array();
    foreach($result as $row){
        foreach($datos as $dato){
            
            if($row['idproducto'] != $dato['id']){
                continue;
            }

            if($row['cantidad'] < $dato['cantidad']){
                $i++;
                $cadena .= '<p>'.$i.'.- Producto '.$row['nombre'].' insuficiente stock </p>';
                $existencia = false;
            }
        }
        // $datos[] = array('id' => $row['idproducto'], 'cantidad' => $row['cantidad']);
    }

    if(!$existencia){
        echo ($cadena);
        return;
    }


    foreach($result as $row){
        foreach($datos as $dato){
            
            if($row['idproducto'] == $dato['id']){
                $id = $dato['id'];
                $cant = $dato['cantidad'];
                $query = "UPDATE productos\n"

                . "SET cantidad = (SELECT cantidad from productos WHERE idproducto = $id) - $cant\n"

                . "WHERE idproducto = $id;";

                $statement = $conexion->prepare($query);
                $statement->execute();
                $result = $statement->fetchall();
            }
        }
        // $datos[] = array('id' => $row['idproducto'], 'cantidad' => $row['cantidad']);
    }
    // echo "xd";
    // echo json_encode($datos);
    // if($existencia){
    //     echo "1";
    // }

    echo "1";

    
?>