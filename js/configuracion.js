var usc = new cookie();

   document.getElementById("fc").addEventListener("click",fontc);
   document.getElementById("fm").addEventListener("click",fontm);
   document.getElementById("fg").addEventListener("click",fontg);

   document.getElementById("tr").addEventListener("click",tema1);
   document.getElementById("ta").addEventListener("click",tema2);
   document.getElementById("tv").addEventListener("click",tema3);

   document.getElementById("btn-defaultconf").addEventListener("click",defaultconf);
   

function fontc() {
   document.getElementById("cuerpo").style.fontSize="small";
    usc.setNombre("uslogueado");
    us=usc.obtenerDato;
    
    
    usc.setValoresCookie(us+"conf1", "small", 10);
  }

  function fontm() {
    document.getElementById("cuerpo").style.fontSize="medium";
    usc.setNombre("uslogueado");
    us=usc.obtenerDato;
    usc.setValoresCookie(us + "conf1", "medium", 10);
  }

  function fontg() {
    document.getElementById("cuerpo").style.fontSize="large";
    usc.setNombre("uslogueado");
    us=usc.obtenerDato;
    usc.setValoresCookie(us+"conf1", "large", 10);
  }

  function cargarFontusr(){
    usc.setNombre("uslogueado");
    us=usc.obtenerDato+"conf1";
    usconf=usc.setNombre(us);
    usconf=usc.obtenerDato;
    document.getElementById("cuerpo").style.fontSize=usconf;
  }


  
function tema1() {
  document.getElementById("cuerpo").style.background="red";
  document.getElementById("contenedor-arriba").style.background="#FA5532";
  document.getElementById("contenedor-abajo").style.background="#F1A695";
  document.getElementById("cuerpo").style.color="#C12A0A";
  document.getElementById("pie").style.background="#BA6654";
   usc.setNombre("uslogueado");
   us=usc.obtenerDato;
   usc.setValoresCookie(us+"conf2","red¿#FA5532¿#F1A695¿#C12A0A¿#BA6654", 10);

 }

 function tema2() {
  document.getElementById("cuerpo").style.background="blue";
  document.getElementById("contenedor-arriba").style.background="#0335D3";
  document.getElementById("contenedor-abajo").style.background="#5174DF";
  document.getElementById("cuerpo").style.color="#5169B4";
  document.getElementById("pie").style.background="#8DA1E1";
   usc.setNombre("uslogueado");
   us=usc.obtenerDato;
   usc.setValoresCookie(us+"conf2","blue¿#0335D3¿#5174DF¿#5169B4¿#8DA1E1", 10);
 }

 function tema3() {
  document.getElementById("cuerpo").style.background="green";
  document.getElementById("contenedor-arriba").style.background="#029502";
  document.getElementById("contenedor-abajo").style.background="#0BD60B";
  document.getElementById("cuerpo").style.color="#2D9B2D";
  document.getElementById("pie").style.background="#90DB90";
   usc.setNombre("uslogueado");
   us=usc.obtenerDato;
   usc.setValoresCookie(us+"conf2","green¿#029502¿#0BD60B¿#2D9B2D¿#90DB90", 10);
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

function defaultconf(){


  usc.setNombre("uslogueado");
  us=usc.obtenerDato+"conf1";
  usc.setNombre(us);
  usc.borrarCookie();


  usc.setNombre("uslogueado");
  us=usc.obtenerDato+"conf2";
  usc.setNombre(us);
  usc.borrarCookie();

  document.getElementById("cuerpo").style.background="white";
  document.getElementById("contenedor-arriba").style.background="#14213D";
  document.getElementById("contenedor-abajo").style.background="rgba(61, 84, 134, 0.98)";
  document.getElementById("cuerpo").style.color="black";
  document.getElementById("pie").style.background="#14213D";
}