var btnConfirmarCompra = $('.btn-confirmar-compra');
btnConfirmarCompra.on('click', function(e){
    var productos = $('tbody tr');
    e.preventDefault();
    var lista = [];
    $.each(productos,function(i,val){
        var id = val.getAttribute("data-id");
        var cantidad = val.querySelector(".cantidad p").innerHTML;
        var overlay = $('.overlay'),
            popup = $('.pop-up'),
            barra = $('.pop-up .barra');
        // console.log(cantidad);
        lista.push(`{
            "id" : "${id}",
            "cantidad" : "${cantidad}"
        }`);
        $.ajax(
            {
                url: './compra.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    list : JSON.parse(lista),
                }
            }
        ).done(function(resp){
            console.log(resp);
            if(resp){
                // console.log("xd");
            }else{
                overlay.css('display', 'flex');
                var texto = popup.querySelector(".mensaje");
                texto.innerHTML = resp;
                barra.animate({
                    width : popup.width()
                },1200,function(){
                    texto.innerHTML = "Producto Eliminado Exitosamente del Carrito!"
                    overlay.css('display', 'none');
                    barra.css('width', '0');
                    location.reload();
                })
            }
        })
    });

})
