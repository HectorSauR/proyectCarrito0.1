var usc = new cookie();

var cerrarSesion = document.querySelector("#cerrar-sesion");
// cerrarSesion.addEventListener("click",function(e){

// });
// console.log(cerrarSesion);
cerrarSesion.addEventListener("click", (e) => {

  usc.setNombre("uslogueado");
  usc.borrarCookie();
  console.log("xd");
  var ca = document.querySelector(".usuario");
  ca.style.display = "none";
});

function ususarioconsulta() {
  var tableRef = document.getElementById("tbl-registrados");
  var cuerpotabla = document.createElement("tbody");

  var array = document.cookie.split(";");
  for (var i = 0; i < array.length; i++) {
    var c = array[i];

    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }

    var array2 = c.split("=");
    let fila = document.createElement("tr");
    // console.log(array2);
    if (array2[1].length > 20 || array2[0] == "uslogueado") {
      continue;
    } else {
      let datos = document.createElement("td");
      datos.innerText = array2[0];
      fila.appendChild(datos);

      datos = document.createElement("td");
      datos.innerText = array2[1];
      fila.appendChild(datos);

      cuerpotabla.appendChild(fila);

      tableRef.appendChild(cuerpotabla);
    }
  }
}

function nombuser() {
  usc.setNombre("uslogueado");
  var uss = usc.obtenerDato;
  var ca = document.querySelector(".usuario");
  // console.log(ca);
  if (uss.length > 15) {
    console.log(uss);
    ca.style.display = "none";
    return;
  }
  ca.innerText = uss;
  ca.style.display = "inline";
}
