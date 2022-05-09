<?php
    require 'PHP/conexion/conexion.php';

    $query = 'SELECT * FROM `productos`;';
    $statement = $conexion->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();
    foreach($result as $row){
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
?>