fetch('includes/datos.php').then((res)=> res.json()).then(response => {
    console.log(response);
    let output ='';
    
    for(let i in response){

        let nodo = document.createElement('ons-carousel-item');
        nodo.style.backgroundColor = "green";
        nodo.innerHTML = `<div style="text-align: center; font-size: 30px; margin-top: 20px; color: white;">${response[i].name}</div> 

        <div style="text-align: center; font-size: 30px; margin-top: 20px; color: white;"><img src="./img/logo.jpg" width="400" height="400"></div> 
        
         
        <div style="text-align: center; font-size: 30px; margin-top: 150px; color: white;"><ons-button   onclick="addCesta('${response[i].name}')"> Añadir a cesta </ons-button></div> 
        
        `;
        document.getElementById('carousel').appendChild(nodo);

        
        }

       
  

    
        
        document.querySelector('#lista').innerHTML = output;

        
         
    

      


}).catch(error => console.log(error));



