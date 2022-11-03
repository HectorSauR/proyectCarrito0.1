function confCarrito(){
    var btnConfirmarCompra = $('.btn-confirmar-compra');
    btnConfirmarCompra.on('click', function(e){
        e.preventDefault();
        $(".overlay-pago").css({"display" : "flex"});
        
        var btnConfirmarTipoCompra = $(".btnConfirmar");

        btnConfirmarTipoCompra.on("click", function(e){
            var cont = 0;
            var productos = $('.tabla1 tr');
            e.preventDefault();
            var lista = [];
            // console.log(productos);
            if(cont == 0){
            //comprobar existencia ----------------------------------------------------------------
                $.each(productos,async function(i,val){
                    // alert(cont);
                    var id = val.getAttribute("data-id");
                    var cantidad = val.querySelector(".cantidad p").innerHTML;
                    var overlay = $('.overlay'),
                        popup = $('.pop-up'),
                        barra = $('.pop-up .barra');
                    let objeto = {
                        "id" : id,
                        "cantidad" : cantidad,
                    }
                    lista.push(objeto);
                    // alert(id);
                    // var data = new FormData();
                    // data.append("id", id);
                    // data.append("cantidad",cantidad);
                    // console.log(data.get(id));
                    // alert("a");
                });
    
    
                fetch("./venta.php",{
                    method : "POST",
                    body : JSON.stringify(lista),
                    headers : {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.text())
                .then(result => {
                    // alert(result);
                    var texto = $(".pop-up .mensaje");
                    overlay.css('display', 'flex');
                    if(result != '1'){
                        texto.html(result);
                        barra.animate({
                            width : popup.width()
                        },2000,function(){
                            // alert("c")
                            texto.text("Producto Eliminado Exitosamente del Carrito!");
                            overlay.css('display', 'none');
                            barra.css('width', '0');
                            return;
                        })
                    }else{
                        texto.text("Venta Realizada con éxito");
                        barra.animate({
                            width : popup.width()
                        },2000,function(){
                            // alert("c")
                            texto.text("Producto Eliminado Exitosamente del Carrito!");
                            overlay.css('display', 'none');
                            barra.css('width', '0');
                            cook = new cookie();
        
                            $.each(lista, function(i,val){
                                
                                var nombre = recorrerCookie(val.id);
                                
                                cook.setNombre(nombre);
                                cook.borrarCookie();
        
                            })
                            location.reload();
                            return;
                        })
    
                        
                    }
    
                    // alert("d")
    
    
                })
    
            }

        })

                // cadena = "{\"id\" : \""+id+"\",\"cantidad\" : \""+ cantidad +"\"}";
                // console.log(data.get("cantidad"));
                // console.log(JSON.parse(lista));


        // alert(cont);
        // alert("c");
        // if(btnConfirmarCompra.attr("venta") != "no"){
        //     alert("siii");
        // }
        // //Empezar a descontar de la bd ----------------------------------------------------------------
        //     $.each(productos,function(i,val){
        //         var id = val.getAttribute("data-id");
        //         var cantidad = val.querySelector(".cantidad p").innerHTML;

        //         var data = new FormData();
        //         data.append("id", id);
        //         data.append("cantidad",cantidad);

        //         // cadena = "{\"id\" : \""+id+"\",\"cantidad\" : \""+ cantidad +"\"}";
        //         // console.log(data.get("cantidad"));
        //         // console.log(JSON.parse(lista));

        //        

        //         fetch("./compra.php",{
        //             method : "POST",
        //             body : data
        //         })

        //        

        //     });
        //     var overlay = $('.overlay'),
        //         popup = $('.pop-up'),
        //         barra = $('.pop-up .barra');

        //     overlay.css('display', 'flex');
        //     var texto = $(".pop-up .mensaje");
        //     texto.text("La venta se a realizado con éxito");
        //     barra.animate({
        //         width : popup.width()
        //     },2000,function(){
        //         texto.text("Producto Eliminado Exitosamente del Carrito!");
        //         overlay.css('display', 'none');
        //         barra.css('width', '0');
        //     })
        // }
    });
}

function recorrerCookie(id){

    var array = document.cookie.split(";");
    
    var cook = new cookie();
    
    cook.setNombre("uslogueado");

    us = cook.obtenerDato;
    
    for(var i = 0; i < array.length; i++){
        
        if(array[i].indexOf("carrito") == -1){
            continue;
        }
        
        var productos = array[i].split("¿");
        antGalleta = productos[0].substring(0,productos[0].indexOf("="));
        var client = productos[6]
        productos[0] = productos[0].substring(productos[0].indexOf("=")+1);

        if(productos[0] == id && client == us){

            return antGalleta;
        }

    }
}




confCarrito();