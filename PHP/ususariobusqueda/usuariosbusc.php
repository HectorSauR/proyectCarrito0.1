<?php
require '../conexion/conexion.php';

//variables post
$usuario = $_POST['txtusuarioL'];
$pass = $_POST['txtcontrL'];


if ($usuario == "admin") {
    $BuscarUsuario = "select * from usuario where usuario = '$usuario' and contraseña = '$pass'";
    $Execute = $conexion->query($BuscarUsuario);

    $r = $Execute->fetchall(PDO::FETCH_ASSOC);

    if ($r) {
        //$_SESSION['userAdmin'] = $r['nivel'];
        //Variables de session
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contra'] = $pass;





?>
        <script src="../../js/cookie.js">
        </script>
        <script>
            var usc = new cookie();
            usc.setValoresCookie('admin', 'admin', 1);
            usc.setValoresCookie('uslogueado', 'admin', 1);
            location.href = "../../inicio.php";
        </script>


    <?php


    } else {
        echo count($r);
        echo "<script> 
            alert ('usuario no encontrado');
            window.location.assign(\"../../pract9.php\"); 
            </script>";
    }
} else {
    ?>
    <script src="../../js/cookie.js">
    </script>
    <script>
        var usc = new cookie();
        let us = '<?php echo  $usuario ?>';
        let contr = '<?php echo  $pass ?>';
        usc.setNombre(us);
        if (contr == usc.obtenerDatoLogin) {
            usc.setValoresCookie("uslogueado", us, 1);
            window.location.assign("../../inicio.php");
        } else {
            alert("Uusario No encontrado verifica los datos");
            location.href = "../../pract9.php";
        }
    </script>
<?php
}
?>