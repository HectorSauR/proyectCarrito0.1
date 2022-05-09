var contProductos = document.getElementById('contenedor-productos');
var boton = document.getElementById('agregar');
// var i = 1;
// var caja = document.createElement('div');
// caja.id = 'primera';
// caja.className = 'caja naranja';

// function crearProducto(id,nombre,descripcion,precio,nombreImg) {
//     var producto = document.createElement('article');
//     producto.className = 'producto';
//     var contImg = document.createElement('div');
//     contImg.className = 'contenedor-img';
//     // contImg.innerHTML = '<img src=\"img/'+nombreImg+'\" alt=\"producto\">';
//     contImg.innerHTML = '<img src="img/'+nombreImg+'" alt="producto">';
//     var contDesc = document.createElement('div');
//     contDesc.className = 'contenedor-descripcion';
//     //creacion del nombre
//     var nom = document.createElement('h2');
//     nom.innerHTML = nombre;
//     nom.id = 'nombre-producto';
//     contDesc.appendChild(nom);
//     //creacion de la descripcion
//     var desc = document.createElement('p');
//     desc.innerHTML = descripcion;
//     desc.className = 'descripcion';
//     desc.id = 'descripcion-producto';
//     contDesc.appendChild(desc);
//     //creacion del precio
//     var prec = document.createElement('p');
//     prec.innerHTML = "$"+precio;
//     prec.id = 'precio-producto'
//     prec.className = 'precio';
//     contDesc.appendChild(prec);
//     //insercion boton
//     var btn = document.createElement('a')
//     btn.innerHTML = "Agregar al Carrito";
//     btn.className = 'btn-agregar-carrito';
//     btn.id = 'btn-agregar-carrito';
//     btn.setAttribute("data-id",id);

//     contDesc.appendChild(btn);

//     producto.appendChild(contImg);
//     producto.appendChild(contDesc);

//     contProductos.appendChild(producto);
// }

// crearProducto(id,nombre,descripcion,precio,imagen);

// crearProducto(1,
// "YEYIAN Teclado Gaming Spark (Rojo)",
// "El teclado mecánico gaming Yeyian Spark Serie 2000 de 88 teclas - switch rojo - tecnología Anti-Ghosting y N-Key Rollover, esta diseñado con funciones innovadoras y avanzada technologia para tus intensas batallas durante largas horas de juego. ",
// 846.45,
// "producto1.png");
// crearProducto("GIGABYTE G5 KD",
// "15.6 pulgadas FHD 144Hz, Intel Core i5-11400H, NVIDIA GeForce RTX 3060 Laptop GPU 6GB GDDR6, 16GB de memoria, 512GB SSD, Win11 Home, laptop para juegos (G5 KD-52US123SO) "
// ,31799.00,
// "producto2.png");
// crearProducto("Lámpara de Escritorio TXG",
// "Luz de Lectura con Brazo Oscilante de Metal, Base o Abrazadera Intercambiable, Lámpara de Mesa de Estudio Clásica con Clip de Arquitecto, Junta Múltiple, Brazo Ajustable (Negro) ",
// 359.00,
// "producto3.png");
// crearProducto("Steren SHOME-120 Foco LED Wi-Fi multicolor",
// "10W, 2.4 GHz, luz RGB, dimeable desde app, para socket E27, compatible con Alexa y Google Assistant, temporizador ",
// 199.00,
// "producto4.png");
// crearProducto("Power Bank 10000 mah Ultra Slim de Bateria Portatil",
// "con Cable Micro USB 20cm, Puertos USB C LED Indicadores de Carga Powerbank 10000 Compatible para IP Samsung Xiaomi, Negro",
// 256.00,
// "producto5.png");
// crearProducto("Apple iPhone 11 Pro",
// "64 GB Color Plata (Reacondicionado)",
// 11599.99,
// "producto6.png");


// boton.addEventListener('click', function(){
    
//     crearProducto("teclado1","teclado mecanico xd",1500,"producto1.png");
//     crearProducto("teclado2","teclado mecanico fibra optica",2500,"producto2.png");
//     crearProducto("teclado3","teclado normal",500,"producto3.png");
//     crearProducto("teclado4","teclado mecamembrana",800,"producto4.png");

// })

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
        
        var usc = new cookie();

        usc.setNombre("uslogueado");
        var uss = usc.obtenerDato;
        if(uss.length > 15){
            alert("Porfavor inicia sesion para agregar articulos al carrito");
            return;
        }
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


function crearCookieProducto(nombre,desc,precio,img,id){
    var galleta = new cookie();
    var contProductos = 0;
    var nombreGalleta = "carrito";
    var cant = 1;
    var cadena = "";
    var repetida = false;
    var antGalleta = "";
    var us = "";
    //selecciona una cadena dividiendola en trozos mediante el valor que se le especifica y lo guarda
    //en un array
    var array = document.cookie.split(";");
    
    galleta.setNombre("uslogueado");

    us = galleta.obtenerDato;

    for(var i = 0; i < array.length; i++){
        
        if(array[i].indexOf("carrito") == -1){
            continue;
        }
        
        var productos = array[i].split("¿");
        antGalleta = productos[0].substring(0,productos[0].indexOf("="));
        productos[0] = productos[0].substring(productos[0].indexOf("=")+1);
    
        // console.log(productos);

        if(productos[0] == id){
            repetida = true;
            cant = parseInt(productos[3],10);
            break;
        } 

        contProductos++;

    }
    
    if(repetida){
        nombreGalleta = antGalleta;
        cant+=1;
    }else{
        nombreGalleta += (contProductos+1).toString();
    }
    cadena = id+"¿"+nombre + "¿"+desc +"¿"+ cant+ "¿"+precio + "¿" + img + "¿" + us;


    // console.log(nombreGalleta + " contador " + contProductos);

    galleta.setValoresCookie(nombreGalleta,cadena,1);

    // window.location.assign("http://127.0.0.1:5500/carrito.html");
}



