

function enviarFormulario(){

    var nombre = document.getElementById('nombre');
    var price = document.getElementById('price');
    var url = document.getElementById('url');
    var mensajeError = [];

    if(nombre.value === null || nombre.value ===""){
        mensajeError.push('ingresa el nombre del producto');

    }

    if(price.value === null || price.value ===""){
        mensajeError.push('ingresa el precio');

    }

    if(url.value === null || nombre.value ===""){
        mensajeError.push('Sube la imagen');

    }
    
    error.innerHTML = mensajeError.join(',');

    return false;
    

    

}