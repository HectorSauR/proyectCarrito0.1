var usc = new cookie();

document.getElementById("btn-login").addEventListener("click", user);


function user() {
    let us = document.getElementById("txtusuarioL").value;
    let contr = document.getElementById("txtcontrL").value;
    
    
  if(us == "" || us == null){
    return alert("Porfavor ingresa usuario");
  }
  if(contr == "" || contr == null){
    return alert("Porfavor ingresa contraseña");
  }

  if(us.length > 15){
    return alert("Porfavor que el usuario no sea mayor a 15 caracteres");
  }
    usc.setNombre(us);
    if (contr == usc.obtenerDatoLogin) {
     usc.setValoresCookie("uslogueado", us, 1);
      window.location.assign("inicio.php"); 
      alert("BIENVENIDO DE NUEVO: " + us);
    } else {
    //  alert("CONTRASEÑA INCORRECTA")
    }

  }