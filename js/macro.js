$("#rBtnTarjeta").on("change",function(e){

    if($("input:checked").val() != "tarjeta"){
        return;
    }

    $(".contenedor-tarjeta").css("display", "flex");
})

$("#oxxo").on("change",function(e){
    $(".contenedor-tarjeta").css("display", "none");
})

$("#tarjeta").keypress(function(e){
    valor = $("#tarjeta").val();
    // cadena1 = valor.substring(0,valor.lastIndexOf("-"));
    cadena2 = valor.substring(valor.lastIndexOf("-")+1);

    if((cadena2.length % 4) == 0 && cadena2.length > 0 && valor.length != 19) {
        valor+= "-"
        $("#tarjeta").val(valor);
    }
})

$(".btnConfirmar").on("click", function(e){
    $(".overlay").css({"display" : "none"})
})