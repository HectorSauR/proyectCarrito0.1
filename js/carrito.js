var tabla = document.getElementById("contenido-tabla");
var total = document.querySelector(".total-pagar");
var overlay = $('.overlay'),
    popup = $('.pop-up'),
    barra = $('.pop-up .barra');

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
    
    total.innerHTML = "$"+totalPagar.toFixed(2);

    var btnBorrar = $(".btn-borrar");

    // console.log(btnBorrar);

    btnBorrar.each(function(index,element){
        // console.log($(this));

        
        $(this).on("click",(e) => {
            e.preventDefault();
            
            var cooki = new cookie();
            cooki.setNombre("uslogueado");

            var id = $(this).parent().parent().attr("data-id");
            // console.
            var array = document.cookie.split(";");
            
            for(var i = 0; i < array.length; i++){
                
                if(array[i].indexOf("carrito") == -1){
                    continue;
                }
                
                var prod = array[i].split("¿");
                var idCookie = prod[0].substring(prod[0].indexOf("=")+1);
                var nombreCookie = prod[0].substring(0,prod[0].indexOf("=")).trim();
                
                // console.log(idCookie);
                // console.log(nombreCookie);
                // console.log(id);
                // console.log(i + ": "+"Cookie: "+ cooki.obtenerDato +" arr: "+prod[6]+" = "+ (cooki.obtenerDato != prod[6])+" , "+ (idCookie != id));
                // console.log(cooki.obtenerDato);
                if(cooki.obtenerDato != prod[6] || idCookie != id){
                    continue;  
                }

                cooki.setNombre(nombreCookie);
                cooki.borrarCookie();
                overlay.css('display', 'flex');

                barra.animate({
                    width : popup.width()
                },1200,function(){
                    overlay.css('display', 'none');
                    barra.css('width', '0');
                    location.reload();
                })
            }
        });
                

    });

    var btnAumentarProducto = $('.btn-amuentar'),
        btnDecrementarProducto = $('.btn-decrementar');

    // console.log(btnAumentarProducto);

    btnAumentarProducto.each(function(index,element){
            // console.log($(this));
            $(this).on("click",(e) => {
                e.preventDefault();
                
                var cooki = new cookie();
                cooki.setNombre("uslogueado");
    
                var id = $(this).parent().parent().attr("data-id");
                var cantHtml = $(this).parent().children("p");
                // console.log(id);
                // console.
                var array = document.cookie.split(";");
                
                for(var i = 0; i < array.length; i++){
                    var cantidad = 0;
                    
                    if(array[i].indexOf("carrito") == -1){
                        continue;
                    }
                    
                    var prod = array[i].split("¿");
                    var idCookie = prod[0].substring(prod[0].indexOf("=")+1);
                    var nombreCookie = prod[0].substring(0,prod[0].indexOf("=")).trim();
                    
                    // console.log(idCookie);
                    // console.log(nombreCookie);
                    // console.log(id);
                    // console.log(i + ": "+"Cookie: "+ cooki.obtenerDato +" arr: "+prod[6]+" = "+ (cooki.obtenerDato != prod[6])+" , "+ (idCookie != id));
                    // console.log(cooki.obtenerDato);
                    if(cooki.obtenerDato != prod[6] || idCookie != id){
                        continue;  
                    }
                    // console.log("Nombre: "+nombreCookie);
                    // console.log("Cantidad: "+ parseInt(prod[3],10));
                    cooki.setNombre(nombreCookie);
                    cantidad = parseInt(prod[3],10)+1;
                    cantHtml.text(cantidad);
                    // console.log(cantidad);
                    cadena = idCookie+"¿"+prod[1] + "¿"+prod[2] +"¿"+ cantidad + "¿"+prod[4] + "¿" + prod[5] + "¿" + prod[6];
                    cooki.setValoresCookie(nombreCookie,cadena,1);
                    // console.log(document.cookie);
                    // location.reload();
                }
                recalcularTotal();       
            });
        });

        btnDecrementarProducto.each(function(index,element){
            // console.log($(this));
            $(this).on("click",(e) => {
                e.preventDefault();
                
                var cooki = new cookie();
                cooki.setNombre("uslogueado");
    
                var id = $(this).parent().parent().attr("data-id");
                var cantHtml = $(this).parent().children("p");

                // console.log(id);
                // console.
                var array = document.cookie.split(";");
                
                for(var i = 0; i < array.length; i++){
                    var cantidad = 0;
                    
                    if(array[i].indexOf("carrito") == -1){
                        continue;
                    }
                    
                    var prod = array[i].split("¿");
                    var idCookie = prod[0].substring(prod[0].indexOf("=")+1);
                    var nombreCookie = prod[0].substring(0,prod[0].indexOf("=")).trim();
                    
                    // console.log(idCookie);
                    // console.log(nombreCookie);
                    // console.log(id);
                    // console.log(i + ": "+"Cookie: "+ cooki.obtenerDato +" arr: "+prod[6]+" = "+ (cooki.obtenerDato != prod[6])+" , "+ (idCookie != id));
                    // console.log(cooki.obtenerDato);
                    if(cooki.obtenerDato != prod[6] || idCookie != id){
                        continue;  
                    }
                    // console.log(nombreCookie);
                    cooki.setNombre(nombreCookie);
                    cantidad = parseInt(prod[3],10)-1;
                    cantHtml.text(cantidad);
                    
                    if(cantidad == 0){
                        cooki.borrarCookie();

                        overlay.css('display', 'flex');

                        barra.animate({
                            width : popup.width()
                        },1200,function(){
                            overlay.css('display', 'none');
                            barra.css('width', '0');
                            location.reload();
                        })
                        
                        break;
                    }
                    cadena = idCookie+"¿"+prod[1] + "¿"+prod[2] +"¿"+ cantidad + "¿"+prod[4] + "¿" + prod[5] + "¿" + prod[6];
                    cooki.setValoresCookie(nombreCookie,cadena,1);
                    // console.log(document.cookie);
                    break;
                }
                recalcularTotal();        
            });
        });

}

function recalcularTotal(){
    let total = 0;
    $("tr").each(function(index,element){
        if(index == 0){
            return;
        }
        var cantidad = parseInt($(element).children(".cantidad").children("p").text());
        var costo = parseFloat($(element).children(".precio").text().trim().substring(1));
        // alert($(element).children(".precio").text().substring(1));
        total += cantidad * costo;
    })
    // alert(total);
    $(".total-pagar").html("$"+total.toFixed(2));

}

function agregarProductoTabla(datos){
    var galleta = new cookie();
    galleta.setNombre("uslogueado");
    const row = document.createElement("tr");
    var id = datos[0].substring(datos[0].indexOf("=")+1);
    row.setAttribute("data-id",id);
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
        <td class = "cantidad">
            <a href="#" class="btn-amuentar"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
            <p>${datos[3]}</p>
            <a href="#" class="btn-decrementar"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
        </td>
        <td class= "precio">
            <p>${datos[4]}</p>
        </td>
        <td>
            <a href="#" class="btn-borrar"><i class="fa fa-minus-square" aria-hidden="true"></i></a>
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
