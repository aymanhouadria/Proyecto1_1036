<?php

function encestar($table)
{
    global $pdo;

    $query = "CREATE TABLE  IF NOT EXISTS $table (
                                    item_id SERIAL PRIMARY KEY, 
                                    client_id CHAR(50) NOT NULL, 
                                    product_id CHAR(50) NOT NULL,
                                    date DATE )";

    $a=ejecutarSQL($query,[]);

    $datos = $_REQUEST;
    
    $query2= "INSERT INTO $table (client_id,product_id,date)
                          VALUES (?,?,CURRENT_DATE)";
    try { 
        

       
        $consult = $pdo -> prepare($query2);
        $a = $consult->execute(array($_REQUEST['client_id'], $_REQUEST['product_id']  ));

        if (1>$a) echo "<h1> Error al añadir a cesta </h1>";
        else echo "<h1> Se ha añadido el producto a la cesta </h1>";

        
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

?>