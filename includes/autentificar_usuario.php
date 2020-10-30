<?php

function autentificar_usuario()
{
    global $pdo;
    
    $clientes = 'clientes';
    $datos = $_REQUEST;
    $nombre = $_REQUEST['nombre'];
    $passwd = $_REQUEST['passwd'];

    
    if (count($_REQUEST) < 2) {
        $data["error"] = "No has llenado todos los campos";
        return;
    }
    $query = "SELECT client_id, name, passwd , role FROM $clientes WHERE name = '$nombre' AND passwd =  '$passwd'";
    $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
    

    if ($rows != NULL) {
        
        global $role;
        $contador = 0;
        foreach($rows[0] as $key => $value) {
            
            if ($contador ==0){
                
                $_SESSION['id'] = $value;
            }
            
            $contador =+1;
            if  ($value[0] == 'a') {
                $_SESSION["usuario"] = 'admin';

            }

          
            elseif ($value[0]== 'n'){
                $_SESSION["usuario"] = 'normal';
            
            }

            

        }
        
        
        
        

        print "<h1 text = center >Bienvenido </h1>";
        $central = "/partials/centro.php";

        

        
    } 

        

    else
        print "<h1 text = center >Autentificación Errónea </h1>"; 
           
    

    /*
    buscar usuario y passwd en DB y comparar con $_POST
    según el resultado fijar la variable de sesion of mostar error

    $_SESSION["usuario"] = role
    */
}

?>