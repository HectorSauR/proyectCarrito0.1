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
    
    function crearTablaProductos($productos){
        foreach($productos as $row){
            ?>
                <tr data-id="<?= $row['idproducto'] ?>" status=<?= $row['status'] ?>>
                    <td class="imagenProd"><img src="<?= $row["imagen"]?>" alt="producto"></td>
                    <td class="nombre"><p><?= $row["nombre"]?></p></td>
                    <td class="descripcion"><p><?= $row["descripcion"]?></p></td>
                    <td class="cantidad"><p><?= $row["cantidad"]?></p></td>
                    <td class="precio"><p>$<?= $row["precio"]?></p></td>
                    <td><a href="#"><i class="fa fa-bars btnModificar" aria-hidden="true"></i></a></td>
                </tr>
            <?php
        }
    }
?>

    
    
    