<?php
    require 'PHP/conexion/conexion.php';

    $query = 'SELECT * FROM `productos`;';
    $statement = $conexion->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();

    $totalPaginacion = obtenerPaginacion($result);

    function crearProducto($productos){
        
        foreach($productos as $row){
            ?>
                <article class="producto">
                    <div class="contenedor-img">
                        <img src="<?= $row['imagen'] ?>" alt="producto">
                    </div>
                    <div class="contenedor-descripcion">
                        <h2 id="nombre-producto"><?= $row['nombre'] ?></h2>
                        <p class="descripcion" id="descripcion-producto"><?= $row['descripcion'] ?> </p>
                        <p id="precio-producto" class="precio">$<?= $row['precio'] ?></p>
                        <a class="btn-agregar-carrito" id="btn-agregar-carrito" data-id="<?= $row['idproducto'] ?>">Agregar al Carrito</a>
                    </div>
                </article>
            <?php
        }

    }

    function crearProductoPaginacion($inicio){
        $queryPag = "SELECT * FROM `productos` WHERE idproducto >= $inicio LIMIT 6";
        $statementPag = $conexion->prepare($queryPag);
        $statementPag->execute();
        $resultPag = $statementPag->fetchall();
        
        foreach($resultPag as $row){
            ?>
                <article class="producto">
                    <div class="contenedor-img">
                        <img src="<?= $row['imagen'] ?>" alt="producto">
                    </div>
                    <div class="contenedor-descripcion">
                        <h2 id="nombre-producto"><?= $row['nombre'] ?></h2>
                        <p class="descripcion" id="descripcion-producto"><?= $row['descripcion'] ?> </p>
                        <p id="precio-producto" class="precio">$<?= $row['precio'] ?></p>
                        <a class="btn-agregar-carrito" id="btn-agregar-carrito" data-id="<?= $row['idproducto'] ?>">Agregar al Carrito</a>
                    </div>
                </article>
            <?php
        }

    }

    function obtenerPaginacion($productos){
        $totalProductos = count($productos);

        if($totalProductos <= 6){
            return 0;
        }
        
        $totalProductos = ceil($totalProductos / 6);

        return $totalProductos;

    }

    function crearPaginacion(){

    }

    
    