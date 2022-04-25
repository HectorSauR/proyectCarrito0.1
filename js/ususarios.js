var usc = new cookie();

document
  .getElementById("btn-registrar")
  .addEventListener("click", crearusuario);
document
  .getElementById("btn-borrarus")
  .addEventListener("click", eliminarusuario);



function crearusuario() {
  let us = document.getElementById("txtusuario").value;
  let contr = document.getElementById("txtcontr").value;
  var array = document.cookie.split(";");
  for (var i = 0; i < array.length; i++) {
    var c = array[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.substring(0, us.length) == us) {
      return alert(
        "EL USUARIO YA SE ENCUENTRA EN USO BUSCA OTRO NOMBRE DE USUSARIO SALUDOS"
      );
    }
  }
  alert("USUSARIO REGISTRADO");
  usc.setValoresCookie(us, contr, 1);
  //location.href =""
}

function eliminarusuario() {
  let us = document.getElementById("txtusuario").value;
  let contr = document.getElementById("txtcontr").value;
  usc.setNombre(us);
  if (contr == usc.obtenerDato) {
    alert("USUSARIO ELIMINADO");
    usc.borrarCookie();
  } else {
    alert("CONTRASEÑA INCRRECTA NO SE PUEDE ELIMINAR");
  }
}

function ususarioconsulta() {
  // tbl = document.getElementById("tbl-registrados").insertRow(1);
  var tableRef = document.getElementById("tbl-registrados");
  var cuerpotabla = document.createElement("tbody");

  alert(document.cookie);

  var array = document.cookie.split(";");
  for (var i = 1; i < array.length; i++) {
    //obtencion de los trozos dividos en el array
    var c = array[i];
    //extraer el caracter 0 de la cadena hasta que encuentre un vacío
    while (c.charAt(0) == " ") {
      c = c.substring(1);
      // alert(c);
    }

    //console.log(c + " = " + i);

    var array2 = c.split("=");

    //console.log(array2 + " = " + i)

    let fila = document.createElement("tr");

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


function nombuser(){
  
  var us =usc.obtenernomuser;
  var ca = document.getElementById("contenedor-arriba");
  let p = document.createElement("p");
  p.innerText=us;
  ca.appendChild(p);
}
