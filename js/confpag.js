function cargarFontusr(){
    usc.setNombre("uslogueado");
    us=usc.obtenerDato+"conf1";
    usconf=usc.setNombre(us);
    usconf=usc.obtenerDato;
    document.getElementById("cuerpo").style.fontSize=usconf;
  }

  function cargartemausr(){
    usc.setNombre("uslogueado");
    us=usc.obtenerDato+"conf2";
    usconf=usc.setNombre(us);
    usconf=usc.obtenerDato;
  
    var c = usconf.split("¿");
    console.log(c);
    document.getElementById("cuerpo").style.background=c[0];
    document.getElementById("contenedor-arriba").style.background=c[1];
    document.getElementById("contenedor-abajo").style.background=c[2];
    document.getElementById("cuerpo").style.color=c[3];
    document.getElementById("pie").style.background=c[4];
  }