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

//   console.log(us + "pss" + contr);
//   return;

  if (us == "" || us == null) {
    return alert("Porfavor ingresa usuario");
  }
  if (contr == "" || contr == null) {
    return alert("Porfavor ingresa contraseña");
  }

  for (var i = 0; i < array.length; i++) {
    var c = array[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.substring(0, us.length) == us) {
      alert(
        "EL USUARIO YA SE ENCUENTRA EN USO BUSCA OTRO NOMBRE DE USUSARIO SALUDOS"
      );
      return;
    }
  }
  alert("Usuario REGISTRADO");
  usc.setValoresCookie(us, contr, 1);
  usc.setValoresCookie("uslogueado", us, 1);
//   return;
  window.location.assign("inicio.html");
}

function eliminarusuario() {
  let us = document.getElementById("txtusuario").value;
  let contr = document.getElementById("txtcontr").value;
  if (us == "" || us == null) {
    return alert("Porfavor ingresa usuario");
  }
  if (contr == "" || contr == null) {
    return alert("Porfavor ingresa contraseña");
  }
  usc.setNombre(us);
  if (contr == usc.obtenerDato) {
    alert("USUSARIO ELIMINADO");
    usc.borrarCookie();
  } else {
    alert("CONTRASEÑA INCRRECTA NO SE PUEDE ELIMINAR");
  }
}