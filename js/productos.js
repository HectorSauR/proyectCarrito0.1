

function crearProducto(id,nombre,descripcion,precio,nombreImg,contProductos) {
    
    var producto = document.createElement('article');
    producto.className = 'producto';

    var contImg = document.createElement('div');
    contImg.className = 'contenedor-img';
    // console.log(nombreImg);
    var img = document.createElement('img');
    img.src = nombreImg;    

    contImg.appendChild(img);

    var contDesc = document.createElement('div');
    contDesc.className = 'contenedor-descripcion';
    //creacion del nombre
    var nom = document.createElement('h2');
    nom.innerHTML = nombre;
    nom.id = 'nombre-producto';
    contDesc.appendChild(nom);
    //creacion de la descripcion
    var desc = document.createElement('p');
    desc.innerHTML = descripcion;
    desc.className = 'descripcion';
    desc.id = 'descripcion-producto';
    contDesc.appendChild(desc);
    //creacion del precio
    var prec = document.createElement('p');
    prec.innerHTML = "$"+precio;
    prec.id = 'precio-producto'
    prec.className = 'precio';
    contDesc.appendChild(prec);
    //insercion boton
    var btn = document.createElement('a')
    btn.innerHTML = "Agregar al Carrito";
    btn.className = 'btn-agregar-carrito';
    btn.id = 'btn-agregar-carrito';
    btn.setAttribute("data-id",id);

    contDesc.appendChild(btn);

    producto.appendChild(contImg);
    producto.appendChild(contDesc);

    contProductos.append(producto);
}

function crearCookieProducto(nombre,desc,precio,img,id){
    var cook = new cookie();
    var nombreGalleta = "carrito";
    var cant = 1;
    var cadena = "";
    var repetida = false;
    var antGalleta = "";
    var us = "";
    //selecciona una cadena dividiendola en trozos mediante el valor que se le especifica y lo guarda
    //en un array
    var array = document.cookie.split(";");

    us = $(".usuario").text();
    // alert(us);
    for(var i = 0; i < array.length; i++){
        
        if(array[i].indexOf("carrito") == -1){
            continue;
        }
        
        var productos = array[i].split("¿");
        antGalleta = productos[0].substring(0,productos[0].indexOf("="));
        var client = productos[6]
        productos[0] = productos[0].substring(productos[0].indexOf("=")+1);
    
        // console.log(productos);
        //alert("array : " + productos[0] + ", id: "+id+" Resultado: ");
        // alert(client + " " + us);
        if(productos[0] == id && client == us){
            //alert("a");
            repetida = true;
            cant = parseInt(productos[3],10);
            break;
        } 
        
    }
    // alert(antGalleta);
    if(repetida){
        nombreGalleta = antGalleta;
        cant+=1;
    }else{
        if(antGalleta == ""){
            nombreGalleta = "carrito1";
        }else{
            antGalleta = antGalleta.substring(nombreGalleta.length+1);
            nombreGalleta += (parseInt(antGalleta,10)+1).toString();
        }
    }
    cadena = id+"¿"+nombre + "¿"+desc +"¿"+ cant+ "¿"+precio + "¿" + img + "¿" + us;

    //alert(nombreGalleta);
    // console.log(nombreGalleta + " contador " + contProductos);
    cook.setValoresCookie(nombreGalleta,cadena,1);

    // window.location.assign("http://127.0.0.1:5500/carrito.php");
}


function recibirDatosCrearProd(){
    const totalPorCont = 6;
    fetch("./JavaScriptProductos.php",{
        method : "POST"
    })
    .then(response => response.text())
    .then(result => {
        // alert(result);
        datos = JSON.parse(result);
        
        // console.log(datos.length);
        var contPag = $(".paginacion");
        // if(datos.length > totalPorCont){
            contPag.css({
                "display" : "flex"
            })
            var paginacion = Math.ceil(datos.length / totalPorCont);
            // console.log(paginacion);
            for(var i = 0 ; i < paginacion; i++){
                var list = document.createElement('li');
                var pag = document.createElement('a');
                pag.href = "#";
                pag.innerHTML = i+1;
                list.appendChild(pag);
                contPag.append(list);
                // console.log(contPag);

                if(i == 0){
                    var contenedor = $('<div class="contenedor-productos active" id="contenedor-productos"></div>');
                }else{
                    var contenedor = $('<div class="contenedor-productos" id="contenedor-productos"></div>');
                }

                // if(i+1>1){
                //     // alert(i);
                    contenedor.className = "contenedor-productos";
                    contenedor.addClass('principal');
                    contenedor.id = "contenedor-productos";
                    contenedor.attr("id-obj", i+1);
                    // console.log(contenedor);
                    contPag.before(contenedor);
                // }

                pag = $(pag);
                //----------------------------------------------AQUI---------------------------
                pag.on("click", function(e){
                    e.preventDefault();
                    var buscador = $(".buscador");

                    if(buscador.hasClass("active")){
                        buscador.val("");
                        buscador.removeClass("active");
                    }

                    contenedores = $(".contenedor-productos");
                    // console.log(document.querySelector(".contenedor-productos"));

                    idBtn = $(this).text();
                    
                    $.each(contenedores, function(i,val){
                        val = $(val);
                        
                        idObj = val.attr("id-obj");

                        if(idObj == idBtn){
                            $(".active").removeClass("active");
                            val.addClass("active");
                        }
                    })

                    // console.log(document.querySelector(".contenedor-productos"));



                })
            }
        // }else{
        //     var paginacion = 1;
        //     contPag.css({
        //         "display" : "none"
        //     })
        // }

        var x = 0;
        $.each(datos, function(i, val){
            // console.log(i);
            var contProductos = $('.principal');
            var id = val['id'];
            var nombre = val['nombre'];
            var descripcion = val['descripcion'];
            var precio = val['precio'];
            var imagen = val['imagen'];
            if(paginacion > 1 && (i % totalPorCont) == 0 && i != 0){
                // alert("a: "+i);
                x++;
                // alert("x: "+x);
            }
            
            if(contProductos.length == 1){
                crearProducto(id,nombre,descripcion,precio,imagen,contProductos);
            }else{
                // console.log(x);
                crearProducto(id,nombre,descripcion,precio,imagen,contProductos[x]);
            }
            
        })

        var btnAgregarCarrito = $(".btn-agregar-carrito"),
            overlay = $('.overlay'),
            popup = $('.pop-up'),
            barra = $('.pop-up .barra');
            // console.log(btnAgregarCarrito);

        btnAgregarCarrito.each(function(index,element,e){
            // console.log($(this).parent());
            $(this).on("click",function(e){
                // alert("si");
                overlay.css('display', 'flex');
                barra.animate({
                    width : popup.width()
                },1200,function(){
                    overlay.css('display', 'none');
                    barra.css('width', '0');
                })
                var contImg = $(this).parent().parent().children('.contenedor-img');
                var contDesc =  $(this).parent();
                // 
                var id = $(this).attr("data-id");
                var nombre = contDesc.children('#nombre-producto').text();
                var descripcion = contDesc.children('#descripcion-producto').text();
                var precio = contDesc.children('#precio-producto').text();
                var img = contImg.children('img').attr("src");
                // var
                // console.log("Nombre "+nombre + " descripcion "+descripcion + " precio "+precio + " img " + img);
                crearCookieProducto(nombre,descripcion,precio,img,id);
            });


        });


    })    
}

recibirDatosCrearProd();