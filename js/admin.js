var usc = new cookie();

usc.setNombre("uslogueado");
var uss = usc.obtenerDato;

var object = {
  nombre: uss,
};

fetch("PHP/BuscarUsuario/buscarusuario.php", {
  method: "POST",
  body: JSON.stringify(object),
  headers: {
    "Content-Type": "application/json",
  }
})
  .then((response) => response.text())
  .then((datos) => {
    // alert(datos);
    datos = JSON.parse(datos);

    if (datos["nivel"] == "1") {
      document.querySelector(".contenedor-abajo ul").innerHTML = `
        <li><a href="registrarModificarProducto.php">PRODUCTOS</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        
      `

      document.querySelector(".nav ul").innerHTML = `
      <li><a href="#" id="cerrar-sesion">CERRAR SESION</a></li>
      <li><a href="configuration.html">CONFIGURACION</a></li>
      <li><a href="modDatosadmin.php">DATOS DE CUENTA</a></li>
      `;
    }

    var cerrarSesion = $("#cerrar-sesion");
    cerrarSesion.on("click", (e) => {
      e.preventDefault();
      var user = new cookie();

      user.setNombre("uslogueado");
      user.borrarCookie();
      // alert("chtm");
      var ca = document.querySelector(".usuario");
      ca.style.display = "none";
      location.href = "pract9.php";
    });
  });
