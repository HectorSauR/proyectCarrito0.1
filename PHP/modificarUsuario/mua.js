var usc = new cookie();

usc.setNombre("uslogueado");
  var uss = usc.obtenerDato;

var object = {

  "nombre":uss,
}

fetch("PHP/BuscarUsuario/buscarusuario.php",{
method:"POST",
body: JSON.stringify(object),
headers : {
  'Content-Type': 'application/json'
}
})


  .then(response => response.text())
  .then(datos => {
    
    datos = JSON.parse(datos);

    

    $(".txtnombre").val (datos['nombre']);
    $(".txtedad").val (datos['edad']);
    $(".txtemail").val(datos['email']);
    $(".txtusuario").val(datos['usuario']);
    $(".txtpasword").val(datos['contraseña']);
    
    document.querySelector(".imagen .imgelg .img-mostrar").innerHTML =
            `
            <img src="${datos['imagen']}" alt="" class="imagenselec" name="imagenselec" width="300px" height="300px">
        `

})



document.querySelector("#img-elg").addEventListener("change", (e) => {
    console.log(e.target.files)
    var imagen = e.target.files[0]
    var archivosSoportados = ['image/jpeg', 'image/png', 'image/jpg']
  
    var seEncontraronElementoNoValidos = false
  
    if (archivosSoportados.indexOf(imagen.type) != -1) {
      
      var imgCodificada = URL.createObjectURL(imagen)
  
      document.querySelector(".imagen .imgelg .img-mostrar").innerHTML =
        `
        <img src="${imgCodificada}" alt="" class="imagenselec" name="imagenselec">
      `
  
    } else {
      seEncontraronElementoNoValidos = true
    }
  
    if (seEncontraronElementoNoValidos) {
     alert("ELIGE UNA IMAGEN PORFAVOR");
     
    }
  })
