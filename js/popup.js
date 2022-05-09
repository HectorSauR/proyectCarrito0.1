var btnClosePopup = $('#btn-cerrar-popup');

btnClosePopup.on('click', function(e){
    e.preventDefault();
    overlay.css('display', 'none');
});


