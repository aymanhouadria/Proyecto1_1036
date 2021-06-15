fetch('includes/datos.php').then((res)=> res.json()).then(response => {
    console.log(response);
    let output ='';
    var tipo_usuario = variable_sesion.getAttribute("value");
    if (tipo_usuario == 'n'){

   
    
    var valor_id= id_sesion.getAttribute("value");
    for(let i in response){
        output += `<div  id="${response[i].product_id}" class="item >
            <img src="descarga.jpg" width="100" height="100">
            <p style="width:200px;">${response[i].name} : ${response[i].price} € </p>
            

            
            
            

            <a href="portal.php?action=add&client_id=${valor_id}&product_id=${response[i].product_id}">Añadir a Cesta</a>


            
            </div>`;
        }
    }

    else{

        var valor_id= id_sesion.getAttribute("value");
        for(let i in response){
            output += `<div  id="${response[i].product_id}" class="item >
                <img src="./descarga.jpg" width="100" height="100">
                <p style="width:200px;">${response[i].name} : ${response[i].price} € </p>
                
    
                
                
                
    
                
    
    
                
                </div>`;
            }
        



    }
        
        document.querySelector('#vis').innerHTML = output;


}).catch(error => console.log(error));



