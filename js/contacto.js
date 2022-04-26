var formulario = document.querySelector(".formulario");
// formulario.addEventListener('submit', validarFormulario);
// console.log(formulario);

formulario.addEventListener("submit",(e) => {
    e.preventDefault();
    // alert("aaaaaa");
    var nombre = document.querySelector("#txtnombre").value;
    var correo = document.querySelector("#txtcorreo").value;
    var mensaje = document.querySelector("#txtmensaje").value;

    var coso = `
        <div>
            <h3>Nombre: </h3>
            <p>${nombre}</p>
            <h3>Correo: </h3>
            <p>${correo}</p>
            <h3>Mensaje: </h3>
            <p>${mensaje}</p>
        </div>
    `

    // document.querySelector(".main").appendChild(coso);
    cont = document.querySelector(".enviado");
    cont.innerHTML = coso;
    cont.style.display = "block";
    // console.log(cont);
});

formulario.addEventListener("reset",(e) => {
    // document.querySelector(".main").appendChild(coso);
    cont = document.querySelector(".enviado");
    cont.style.display = "none";

});