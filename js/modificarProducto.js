$(document).ready(function(e){
    
    var input = document.querySelector("input");
              
    input.addEventListener("mousewheel",function(event){ 
        this.blur() 
    });
    
    $(".cantidad").each(function(){
        cantidad = $(this).text();
        
        if(cantidad < 3){
            $(this).parent().css({
                background: "#ff00006e"
            })
        }else if(cantidad < 10){
            $(this).parent().css({
                background: "#ffa04056"
            })
        }
        
    })
})


var idActivo;

botonMostrarFormulario();

$("#buscar").on("change", function(e){
    cont = $("#contenido-tabla");
    cont.empty();

    object = {
        producto : $(this).val()
    }


    fetch("./busqueda.php",{
        method : "POST", 
        body : JSON.stringify(object)
    })
    .then(resul => resul.text())
    .then(datos => {
        // alert(datos);
        datos = JSON.parse(datos);
        crearLinea(datos,cont);
        botonMostrarFormulario();
    })
})


function crearLinea(datos,contenedor){
    
    $.each(datos, function(i, val){
        
        var row = $(`
            <tr data-id="${val["id"]}" status="${val["status"]}">
                <td class="imagenProd"><img src="${val["imagen"]}"></td>
                <td class="nombre"><p>${val["nombre"]}</p></td>
                <td class="descripcion"><p>${val["descripcion"]}</p></td>
                <td class="cantidad"><p>${val["cantidad"]}</p></td>
                <td class="precio"><p>$${val["precio"]}</p></td>
                <td><a href="#"><i class="fa fa-bars btnModificar" aria-hidden="true"></i></a></td>
            </tr>
        `)

        contenedor.append(row);

    })


}

function botonMostrarFormulario(){
    $(".btnModificar").each(function(){
        $(this).on("click", function(e) {
            e.preventDefault();
            var padre = $(this).parent().parent().parent();
            var actual = padre.attr('data-id');
    
    
            var datos = {
                id : padre.attr('data-id'),
                status : padre.attr('status'),
                nombre : padre.children(".nombre").text(),
                desc : padre.children(".descripcion").text(),
                precio : padre.children(".precio").text().substring(1),
                cantidad : padre.children(".cantidad").text(),
                imagen : padre.children(".imagenProd").children().attr("src")
            }
    
            // alert(JSON.stringify(datos));
            // alert(datos["imagen"]);
            
            var rowAddForm = $(
                `
                <tr  class="insertado">
                    <td colspan="6">
                        <form class="contenido forModify" action="PHP/Productos/modpro.php" method="post" enctype="multipart/form-data">
                            <h1 class="titulo">MODIFICAR PRODUCTO</h1>
                            <div class="inputRegistrar">
                                    <input type="text" name="idProd" id="idProd" class="idProd" value="${datos["id"]}" style="display:none">
                                    <label for="name">Nombre: </label>
                                    <input type="text" name="txtnombre" id="txtnombre" value="${datos["nombre"]}" >
                                    <label for="name">Descripcion: </label>
                                    <textarea name="txtdescr" id="txtdescr" class="textDescripcion">${datos["desc"]}</textarea>
                                    <label for="name">Precio: </label>
                                    <input type="number" name="txtprec" id="txtprec" value="${datos["precio"]}" required autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1">
                                    <label for="name">Cantidad: </label>
                                    <input type="number" name="txtcant" id="txtcant" value="${datos["cantidad"]}" required autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1">
                                    <label for="name">Status: </label>
                                    <input type="number" name="txtstatus" id="txtstatus" value=${datos["status"]} required autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 49)" min="0">
                                    <p class="text-example">[1 = activo] [0 = inactivo]</p>
                            </div>
                            <div class="imagen">
                                <div class="imgelg" action="registrarimagen.php" method="post">
                                    <div class="img-mostrar2">
                                        <img src="${datos["imagen"]}" alt="" class="imagenselec2" name="imagenselec">
                                    </div>
                                    <input type="file" name="img-elg" id="img-elg" class="img-elg">
                                </div>
                            </div>
                            <input type="submit" class="btnModificarProd" value="Modificar">
                        </form>
                    </td>
                </tr>
                `);
            
            if(($(".insertado").length != 0)&&(actual == idActivo)){
                $(".insertado").remove();
                idActivo = undefined;
                return;
            }    
                
            if(idActivo == undefined){
                // alert(actual);  
                idActivo = actual;
                padre.after(rowAddForm);
            }else if(($(".insertado").length != 0)&&(actual != idActivo)){
                $(".insertado").remove();
                idActivo = padre.attr('data-id');
                padre.after(rowAddForm);    
            }
    
            
        })
    })
}



