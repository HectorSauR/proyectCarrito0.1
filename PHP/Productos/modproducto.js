


document.querySelector("#img-elg2").addEventListener("change", (e) => {

    console.log(e.target.files)
    var imagen = e.target.files[0]
    var archivosSoportados = ['image/jpeg', 'image/png', 'image/jpg']
  
    var seEncontraronElementoNoValidos = false
  
    if (archivosSoportados.indexOf(imagen.type) != -1) {
      //VISTA PREVIA DE IMAGEN
      var imgCodificada = URL.createObjectURL(imagen)
  
      document.querySelector(".imagen2 .imgelg2 .img-mostrar2").innerHTML =
        `
        <img src="${imgCodificada}" alt="" class="imagenselec2" name="imagenselec2">
      `
  
      document.querySelector(".main .contenido .imagen .imgelg .img-mostrar .imagenselec").addEventListener("click", (e) => {
        e.target.src="../../img/regalo.png";
      })
    } else {
      seEncontraronElementoNoValidos = true
    }
  
    if (seEncontraronElementoNoValidos) {
     alert("ELIGE UNA IMAGEN PORFAVOR");
     
    }
})

  

$(".idProd").on("change", (e) =>   {

  var id = $(".idProd").val();

  var object = {
    "id" : id
  }

  fetch("./modProdFetch.php",{
    method: "POST",
    body : JSON.stringify(object),
    headers : {
      'Content-Type': 'application/json'
    }
  })
  .then(response => response.text())
  .then(datos => {
    // alert(datos);

    datos = JSON.parse(datos);

    // alert(datos['nombre']);

    $(".txtnombre2").val (datos["nombre"]);
    $(".txtdescr2").val (datos["descripcion"]);
    $(".txtprec2").val(datos["precio"]);
    $(".txtcant2").val(datos["cantidad"]);
    $(".txtstatus2").val(datos["status"]);
    
    document.querySelector(".imagen2 .imgelg2 .img-mostrar2").innerHTML =
            `
            <img src="${datos["imagen"]}" alt="" class="imagenselec2" name="imagenselec2">
        `
    })

  // alert(prd);

  
})
// })
