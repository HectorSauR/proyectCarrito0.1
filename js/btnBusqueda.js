
$(".btn-busqueda").on("click", function(e){
    e.preventDefault();
    // alert("a");
    var buscador = $(".buscador");

    if(buscador.hasClass("active")){
        buscador.val("");
    }

    buscador.toggleClass("active");

});

$(".buscador").on("change",function(e){
    $(".busqueda").empty();
    var prod = $(this).val();

    var object = {
        "producto" : prod
    }

    fetch("./busqueda.php",{
        method : "POST", 
        body : JSON.stringify(object)
    })
    .then(resul => resul.text())
    .then(datos => {
        datos = JSON.parse(datos);
        // alert(datos.length);
        var cont = $(".busqueda");
        // if(datos.length > 1){
            $.each(datos, function(i,val){
                
                var id = val['id'];
                var nombre = val['nombre'];
                var descripcion = val['descripcion'];
                var precio = val['precio'];
                var imagen = val['imagen'];
    
                crearProducto(id,nombre,descripcion,precio,imagen,cont)
    
            });
        // }

        $(".active").removeClass("active");
        cont.addClass("active");

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
        })
    })
})