<?php
  require "PHP/conexion/conexion.php";

 

  $query = 'SELECT *  FROM `productos`;';
  $statement = $conexion->prepare($query);
  $statement->execute();
  $result = $statement->fetchall();

     $datos = [];
        foreach($result as $row){
            $datos[] = [
                'idproducto' => $row['idproducto'],
                'nombre' => $row['nombre'],
                'descripcion' => $row['descripcion'],
                'precio' => $row['precio'],
                'cantidad' => $row['cantidad'],
                'status' => $row['status'],
                'imagen' => $row['imagen'],
            ];
        }
             
     
    ?>







