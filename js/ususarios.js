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
  // window.location.assign("http://127.0.0.1:5500/"); 
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
  
  var tableRef = document.getElementById("tbl-registrados");
  var cuerpotabla = document.createElement("tbody");

  

  var array = document.cookie.split(";");
  for (var i = 1; i < array.length; i++) {
    

   
      var c = array[i];
   
      while (c.charAt(0) == " ") {
        c = c.substring(1);
        
      }
      
      
      var array2 = c.split("=");
      let fila = document.createElement("tr");
      
      if(array2[1].length>250 || array2[0]=="uslogueado") {
        return
      }else{
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

 
  function nombuser(){
  usc.setNombre("uslogueado");
  var uss = usc.obtenerDato;
  var ca = document.getElementById("btn-usuario");
  let sp = document.createElement("span");
  sp.innerText=uss;
  ca.appendChild(sp);
}

