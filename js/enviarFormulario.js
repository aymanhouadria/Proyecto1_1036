

function enviarFormulario(){
    var form = document.form;
    if(form.name.value ==0){
            alert("Rellene el nombre")
            form.nombre.focus();
            return false;
    }

    if(form.price.value ==0){
        alert("Rellene el precio")
        form.price.focus();
        return false;
    }

    if(form.url.value ==0){
        alert("Suba una imagen")
        form.url.focus();
        return false;
    }
    
    

    

}