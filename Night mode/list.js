$(document).ready(function(){
    $('h1').hide()
    $('h1').show(500)
    $('h3').hide()
    $('h3').show(1000)

$('.hide').hide()
$('.hide').show(3000);

$('.contacto').hide();
$('.contacto').toggle(3000);
sweetAlert("Bienvenido","A continuacion veras...","success")
})

function sweetAlert(titulo,subtitulo,icono){
    Swal.fire(
        titulo,
        subtitulo,
        icono
      )

      
};

