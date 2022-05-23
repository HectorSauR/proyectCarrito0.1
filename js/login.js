$("#btn-login").on("click", function(e){
    e.preventDefault();
    var usuario = $("#txtusuarioL").val();
    var contra = $("#txtcontrL").val();

    var obj = {
        "usuario" : usuario,
        "contra" : contra
    }

    // alert(JSON.stringify(obj));

    fetch("PHP/sesiones/iniciarSesion.php",{
        method : "POST",
        body : JSON.stringify(obj)
    })
    .then(response => response.text())
    .then(datos => {
        // alert(datos);
        if(datos == "1"){
            location.href = "inicio.php"
        }
    })
})