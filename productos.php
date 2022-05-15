<?php
    require 'PHP/conexion/conexion.php';

    $query = 'SELECT * FROM `productos` Where status = 1;';
    $statement = $conexion->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();

    // $totalPaginacion = obtenerPaginacion($result);
    
    // function crearProducto($productos){
        
    //     foreach($productos as $row){
    //         ?>
    <!-- //             <article class="producto"> -->
    <!-- //                 <div class="contenedor-img"> -->
    <!-- //                     <img src="<?= $row['imagen'] ?>" alt="producto"> -->
    <!-- //                 </div> -->
    <!-- //                 <div class="contenedor-descripcion"> -->
    <!-- //                     <h2 id="nombre-producto"><?= $row['nombre'] ?></h2> -->
    <!-- //                     <p class="descripcion" id="descripcion-producto"><?= $row['descripcion'] ?> </p> -->
    <!-- //                     <p id="precio-producto" class="precio">$<?= $row['precio'] ?></p> -->
    <!-- //                     <a class="btn-agregar-carrito" id="btn-agregar-carrito" data-id="<?= $row['idproducto'] ?>">Agregar al Carrito</a> -->
    <!-- //                 </div> -->
    <!-- //             </article> -->
    //         <?php
    //     }

    // }
    
    function crearTablaProductos($productos){
        foreach($productos as $row){
            ?>
                <tr>
                    <td><img src="<?= $row["imagen"]?>" alt="producto"></td>
                    <td><p><?= $row["nombre"]?></p></td>
                    <td><p><?= $row["descripcion"]?></p></td>
                    <td class="cantidad"><p><?= $row["cantidad"]?></p></td>
                    <td class="precio"><p>$<?= $row["precio"]?></p></td>
                </tr>
            <?php
        }
    }


    
    
    