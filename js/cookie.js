class cookie{
    //Funcion hecha para la creacion de una cookie
    //nombre = nombre con el que se identificara la cookie
    //valor = valor que contendrá la cookie
    //expiracion = Tiempo que tardara en que esta cookie desaparezca
    setValoresCookie(nombre,valor,expires){
        this.nom = nombre;
        this.val = valor;
        this.exp = expires;
        this.setCookie();
    }
    //funcion hecha para la obtencion de una cookie o borrar
    //nombre = nombre con el que se identificara la cookie
    setNombre(nombre){
        this.nom = nombre;
    }
    //metodo para crear cookie
    setCookie(){
        var d = new Date();
        //crea el tiempo convirtiendolo en milisegundos
        d.setTime(d.getTime()+this.exp*24*60*60*1000);
        //se crea la cadena que se usara para concedir el tiempo de expiracion  de la cookie
        var expiracion = "expires="+d.toUTCString();
        //se crea la cookie
        document.cookie = this.nom+"="+this.val+";"+expiracion + "; Secure";
    }

    get obtenerDato(){
        //empezando la cadena para la obtencion del dato
        var nom = this.nom + "=";
        //selecciona una cadena dividiendola en trozos mediante el valor que se le especifica y lo guarda
        //en un array
        var array = document.cookie.split(";");
        for(var i = 0; i < array.length; i++){
            //obtencion de los trozos dividos en el array
            var c = array[i];
            //extraer el caracter 0 de la cadena hasta que encuentre un vacío
            while(c.charAt(0)==" "){
                // alert(c);
                c = c.substring(1);
            }
            if(c.indexOf(nom)==0){
                return c.substring(nom.length,c.length);
            }
        }
        return "No se a encontrado una cookie con ese nombre";
    }

    borrarCookie(){
        //se almacena nada
        this.val = "";
        //se declara la expiracion a 0 para que la cookie desaparezca
        this.exp = 0;
        //se ejecuta la modificacion/creacion de cookie
        this.setCookie();
    }
}