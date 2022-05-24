<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro ENVIPROPMENT</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/registro.css" />
    <link rel="stylesheet" href="css/tabla.css" />
    <link rel="icon" href="img/escritorio.png" />
  </head>
  <body onload="ususarioconsulta()">
    <header>
      <div class="contenedor-arriba">
        <a href="#" class="btn-nombre"><h1>ENVIPROPMENT</h1></a>
        <div class="contenedor-busqueda">
          <a href="#" class="btn-busqueda"
            ><i class="fa fa-search" aria-hidden="true"></i
          ></a>
        </div>

        <ul class="nav">
          <li>
            <a href="#" class="btn-usuario"
              ><i class="fa fa-user-circle-o" aria-hidden="true"></i
            ></a>
            <ul>
              <li>
                <a href="login.php" id="cerrar-sesion">INICIAR SESION</a>
              </li>
              <li><a href="#">CONFIGURACION</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="contenedor-abajo">
        <a href="#" class="btn-carrito"
          ><i class="fa fa-shopping-cart" aria-hidden="true"></i
        ></a>
        <ul>
        </ul>
      </div>
    </header>
    <main>
      <div class="registro">
        <h4>Registro</h4>
        <label for="txtusuario">Usuario</label>
        <input
          type="text"
          name="txtusuario"
          id="txtusuario"
          size="20"
          required
          placeholder="Ingrese usuario"
        />
        <br />
        <label for="txtcontr">Contraseña</label>
        <input
          type="password"
          name="txtcontr"
          id="txtcontr"
          size="20"
          required
          placeholder="Ingrese contraseña"
        />
        <br />
        <input type="button" value="Registrarse" id="btn-registrar" />
        <input type="button" value="Borrar mi usuario" id="btn-borrarus" />
      </div>

      <table class="registrados" id="tbl-registrados">
        <caption>
          REGISTRADOS
        </caption>
        <thead>
          <tr>
            <td>Usuario</td>
            <td>Contraseña</td>
          </tr>
        </thead>
      </table>
    </main>
    <!-- <button id="agregar">Agregar</button> -->
    <footer>
      <p>made by ENVIPROPMENT</p>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/cookie.js"></script>
    <script src="js/ususarios.js"></script>
    <script src="js/registro.js"></script>
  </body>
</html>
