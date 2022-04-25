var usc = new cookie();

document.getElementById("btn-login").addEventListener("click", user);



function user() {
    let us = document.getElementById("txtusuarioL").value;
    let contr = document.getElementById("txtcontrL").value;
    
    
    usc.setNombre(us);
    if (contr == usc.obtenerDatoLogin) {
      usc.setValoresCookie("uslogueado", us, 1);
      window.location.assign("http://127.0.0.1:5500/registro.html"); 
    } else {
      alert("CONTRASEÑA INCORRECTA");
    }

  }


  
  