<?php
require "../conexion/conexion.php";

class modua{

    


    public function obtener_productos_select() {
        
       
     $BuscarUsuario = "select * from usuario where id=";
     $Execute = $conexion->query($BuscarUsuario);

     $resultado = $Execute->fetchall(PDO::FETCH_ASSOC);

        $datos = [];
        if($resultado->num_rows) {
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = [
                    'idproducto' => $row['id'],
                    'nombre' => $row['nombre'],
                    'descripcion' => $row['descripcion'],
                    'precio' => $row['precio'],
                    'cantidad' => $row['cantidad'],
                    'status' => $row['status'],
                    'imagen' => $row['imagen'],
                ];
            }
        }
        return $datos;
    }



}
?>