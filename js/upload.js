function	upload()	{

    var caja = document.getElementById("caja")
    
    caja.style.display="none";

    var nombre = document.getElementById('inpFile').files[0].name;
    document.getElementById("url").value = "/uploads/"+ nombre;
    document.getElementById("url").href = "/uploads/"+ nombre;

    
   
    
}