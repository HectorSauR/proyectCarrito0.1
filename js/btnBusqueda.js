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
    var prod = $(this).val();

    fetch("./busqueda.php",{
        method : "POST", 
        body : JSON.stringify(object)
    })
    .then(resul => resul.text())
    .then(datos => {
        
    })

})