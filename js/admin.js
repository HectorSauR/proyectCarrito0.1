
var usc = new cookie();

usc.setNombre("uslogueado");
  var uss = usc.obtenerDato;

var object = {

  "nombre":uss,
}

fetch("PHP/BuscarUsuario/buscarusuario.php",{
method:"POST",
body: JSON.stringify(object),
headers : {
  'Content-Type': 'application/json'
}
})


  .then(response => response.text())
  .then(datos => {

    datos = JSON.parse(datos);

if (datos["nivel"]=="1"){
    document.querySelector(".contenedor-abajo ul").innerHTML =
        `
        <li><a href="gestProductos.php">PRODUCTOS</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        
      `




      document.querySelector(".nav ul").innerHTML = 
      `
      <li><a href="pract9.php" id="cerrar-sesion">CERRAR SESION</a></li>
      <li><a href="configuration.html">CONFIGURACION</a></li>
      <li><a href="modDatosadmin.php">DATOS DE CUENTA</a></li>
      `
}

})