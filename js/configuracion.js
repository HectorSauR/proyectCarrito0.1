var usc = new cookie();

   document.getElementById("fc").addEventListener("click",fontc());
   document.getElementById("fm").addEventListener("click",fontm());
   document.getElementById("fg").addEventListener("click",fontg());

function fontc() {
   
    usc.setNombre("uslogueado");
    us=usc.obtenerDato;
    usc.setValoresCookie(us+"conf", "small", 10);
  }

  function fontm() {
    usc.setNombre("uslogueado");
    us=usc.obtenerDato;
    usc.setValoresCookie(us + "conf", "medium", 10);
  }

  function fontg() {
    usc.setNombre("uslogueado");
    us=usc.obtenerDato;
    usc.setValoresCookie(us+"conf", "large", 10);
  }

  function cargarFontusr(){
    usc.setNombre("uslogueado");
    us=usc.obtenerDato + "conf";
    document.getElementById("cuerpo").style.fontSize=us;
  }