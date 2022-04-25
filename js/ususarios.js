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

  if(us == "" || us == null){
    return alert("Porfavor ingresa usuario");
  }
  if(contr == "" || contr == null){
    return alert("Porfavor ingresa contraseña");
  }
  
  for (var i = 0; i < array.length; i++) {
    var c = array[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.substring(0, us.length) == us) {
      alert("EL USUARIO YA SE ENCUENTRA EN USO BUSCA OTRO NOMBRE DE USUSARIO SALUDOS");
      return 
    }
  }
  alert("USUSARIO REGISTRADO");
  usc.setValoresCookie(us, contr, 1);
  window.location.assign("http://127.0.0.1:5500/inicio.html"); 
}


function eliminarusuario() {
  let us = document.getElementById("txtusuario").value;
  let contr = document.getElementById("txtcontr").value;
  if(us == "" || us == null){
    return alert("Porfavor ingresa usuario");
  }
  if(contr == "" || contr == null){
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
      console.log(array2);
      if(array2[1].length>20 || array2[0]=="uslogueado") {
        continue;
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
    var ca = document.querySelector(".usuario");
    ca.innerText=uss;
      ca.style.display= "inline";
}


document.getElementById("cs").addEventListener("click",cs);



function cs(){
   alert(asoidjoaisdj);
   usc.setNombre("uslogueado");
   
   usc.borrarCookie()

}