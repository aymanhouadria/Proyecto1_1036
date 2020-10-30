<?php

function eliminar_producto($table)
{
    global $pdo;

  

    $datos = $_REQUEST;
    $item_id = $_REQUEST['item_id'];
    
    $query= "DELETE FROM $table WHERE product_id = '$item_id'";
   
    try { 
        
        $a=ejecutarSQL($query,[]);

        

        echo "<h1> Se ha eliminado el producto a la cesta </h1>";

        
    
    } catch (PDOExeption $e) {
        echo ($e->getMessage());
    }
}

?>