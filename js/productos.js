var galleta = new cookie();
var contProductos = document.getElementById('contenedor-productos');
var boton = document.getElementById('agregar');
var i = 1;
// var caja = document.createElement('div');
// caja.id = 'primera';
// caja.className = 'caja naranja';

function crearProducto(nombre,descripcion,precio,nombreImg) {
    var producto = document.createElement('article');
    producto.className = 'producto';
    var contImg = document.createElement('div');
    contImg.className = 'contenedor-img';
    // contImg.innerHTML = '<img src=\"img/'+nombreImg+'\" alt=\"producto\">';
    contImg.innerHTML = '<img src="img/'+nombreImg+'" alt="producto">';
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
    btn.setAttribute("data-id",i);
    i++;

    contDesc.appendChild(btn);

    producto.appendChild(contImg);
    producto.appendChild(contDesc);

    contProductos.appendChild(producto);
}



crearProducto("YEYIAN Teclado Gaming Spark (Rojo)",
"El teclado mecánico gaming Yeyian Spark Serie 2000 de 88 teclas - switch rojo - tecnología Anti-Ghosting y N-Key Rollover, esta diseñado con funciones innovadoras y avanzada technologia para tus intensas batallas durante largas horas de juego. ",
846.45,
"producto1.png");
crearProducto("GIGABYTE G5 KD",
"15.6 pulgadas FHD 144Hz, Intel Core i5-11400H, NVIDIA GeForce RTX 3060 Laptop GPU 6GB GDDR6, 16GB de memoria, 512GB SSD, Win11 Home, laptop para juegos (G5 KD-52US123SO) "
,"31,799.00",
"producto2.png");
crearProducto("Lámpara de Escritorio TXG",
"Luz de Lectura con Brazo Oscilante de Metal, Base o Abrazadera Intercambiable, Lámpara de Mesa de Estudio Clásica con Clip de Arquitecto, Junta Múltiple, Brazo Ajustable (Negro) ",
359.00,
"producto3.png");
crearProducto("Steren SHOME-120 Foco LED Wi-Fi multicolor",
"10W, 2.4 GHz, luz RGB, dimeable desde app, para socket E27, compatible con Alexa y Google Assistant, temporizador ",
199.00,
"producto4.png");


// boton.addEventListener('click', function(){
    
//     crearProducto("teclado1","teclado mecanico xd",1500,"producto1.png");
//     crearProducto("teclado2","teclado mecanico fibra optica",2500,"producto2.png");
//     crearProducto("teclado3","teclado normal",500,"producto3.png");
//     crearProducto("teclado4","teclado mecamembrana",800,"producto4.png");

// })

var btnAgregarCarrito = $(".btn-agregar-carrito");

// console.log(btnAgregarCarrito);

btnAgregarCarrito.each(function(index,element,e){
    // console.log($(this).parent());
    var padre = $(this).parent();
    // 
    var nombre = padre.children('#nombre-producto').text();
    var descripcion = padre.children('#descripcion-producto').text();
    var precio = padre.children('#precio-producto').text();

    // console.log("Nombre "+nombre + " descripcion "+descripcion + " precio "+precio)
});


