var tabla = document.getElementById("tabla");
var total = document.querySelector(".total-pagar");

function obtenerDatosProducto(){
    var galleta = new cookie();
    var contProductos = 0;
    //selecciona una cadena dividiendola en trozos mediante el valor que se le especifica y lo guarda
    //en un array
    var array = document.cookie.split(";");
    
    for(var i = 0; i < array.length; i++){
        
        if(array[i].indexOf("carrito") == -1){
            continue;
        }
        
        var productos = array[i].split("¿");
        
        agregarProductoTabla(productos);
        calcTotalaPagar(productos);


    }
    
    total.innerHTML = "$"+totalPagar;


}

function agregarProductoTabla(datos){
    
    const row = document.createElement("tr");
    // var id = datos[0].substring(7);
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
            <a href="#"><i class="fa fa-minus-square btn-borrar" id="btn-borrar" aria-hidden="true"></i></a>
        </td>
    `
    tabla.appendChild(row);
}
var totalPagar = 0.0;

function calcTotalaPagar(prod){
    
    precio = prod[4].substring(1);

    totalPagar += parseFloat(prod[3],10) * parseFloat(precio,10);
    // console.log(prod[4] );
}


var btnBorrar = $(".btn-borrar");


btnBorrar.each(function(index,element){
    // console.log($(this).parent());
    $(this).on("click",function(){
        var padre =  $(this).parent();
        

        
        
    });

});

function borrarProducto(){
    galleta = new cookie();

    

}