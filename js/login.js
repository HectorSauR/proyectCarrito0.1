var usc = new cookie();
document.getElementById("btn-login").addEventListener("click", user);



function user() {
    let us = document.getElementById("txtusuarioL").value;
    let contr = document.getElementById("txtcontrL").value;
  
    
    usc.setNombre(us);
    if (contr == usc.obtenerDatoLogin) {
      alert("HOLA DE NUEVO");
    } else {
      alert("CONTRASEÑA INCORRECTA");
    }

     //location.href =""
  }
  