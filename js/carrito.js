var tabla = document.getElementById("tabla");
var total = document.querySelector(".total-pagar");

function obtenerDatosProducto(){
    var galleta = new cookie();
    galleta.setNombre("uslogueado");

    //selecciona una cadena dividiendola en trozos mediante el valor que se le especifica y lo guarda
    //en un array
    var array = document.cookie.split(";");
    
    for(var i = 0; i < array.length; i++){
        
        if(array[i].indexOf("carrito") == -1){
            continue;
        }
        
        
        var productos = array[i].split("¿");
        
        if(galleta.obtenerDato != productos[6]){
            // console.log(datos[6]);
            // console.log("aaaa");
            continue;  
        }

        agregarProductoTabla(productos);
        calcTotalaPagar(productos);


    }
    
    total.innerHTML = "$"+totalPagar;

    var btnBorrar = $(".btn-borrar");

    // console.log(btnBorrar);

    btnBorrar.each(function(index,element){
        // console.log($(this));

        
        $(this).on("click",(e) => {
            e.preventDefault();
            
            var cooki = new cookie();
            cooki.setNombre("uslogueado");

            var id = $(this).attr("data-id");
            // console.
            var array = document.cookie.split(";");
            
            for(var i = 0; i < array.length; i++){
                
                if(array[i].indexOf("carrito") == -1){
                    continue;
                }
                
                var prod = array[i].split("¿");
                var idCookie = prod[0].substring(prod[0].indexOf("=")+1);
                var nombreCookie = prod[0].substring(0,prod[0].indexOf("="));
                
                if(cooki.obtenerDato != prod[6] && idCookie != id){
                    // console.log(datos[6]);
                    console.log("aaaa");
                    continue;  
                }

                console.log(nombreCookie.trim());
                // console.log(nombreCookie);
                // cooki.setNombre(nombreCookie);
                // cooki.borrarCookie();

            }
        });
                

    });
}

function agregarProductoTabla(datos){
    var galleta = new cookie();
    galleta.setNombre("uslogueado");
    const row = document.createElement("tr");
    var id = datos[0].substring(datos[0].indexOf("=")+1);
    // console.log(id);
    
    row.innerHTML = `
        <td>
        <img src="${datos[5]}" alt="">
        </td>
        <td>
            <p>${datos[1]}</p>
        </td>
        <td>
            <p>${datos[2]}</p>
        </td>
        <td class = "cant">
            <p>${datos[3]}</p>
        </td>
        <td class= "precio">
            <p>${datos[4]}</p>
        </td>
        <td>
            <a href="#" class="btn-borrar" data-id="${id}"><i class="fa fa-minus-square" aria-hidden="true"></i></a>
        </td>
    `
    tabla.appendChild(row);
}
var totalPagar = 0.0;

function calcTotalaPagar(prod){
    
    precio = prod[4].substring(1);
    // console.log(precio);
    // console.log(prod[3]);
    totalPagar += parseFloat(prod[3],10) * parseFloat(precio,10);
    // console.log(totalPagar);
}




function borrarProducto(){
    galleta = new cookie();
}