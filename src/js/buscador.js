document.addEventListener('DOMContentLoaded', function(){
    iniciarApp();
})

function iniciarApp(){
    BuscarPorFecha();
}


function BuscarPorFecha(){
    const fechaInput = document.querySelector('#fecha');
    fechaInput.addEventListener('input', function(e){
       const fechaSeleccionada = e.target.value;
       console.log(fechaSeleccionada);

       window.location = `?fecha=${fechaSeleccionada}`;
    });
}