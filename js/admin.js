
var usc = new cookie();





usc.setNombre("uslogueado");
  var uss = usc.obtenerDato;

if (uss=="admin"){
    document.querySelector(".contenedor-abajo ul").innerHTML =
        `
        <li><a href="gestProductos.php">PRODUCTOS</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Inicio</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      `
}

