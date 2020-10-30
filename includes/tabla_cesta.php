<?php

function tabla_cesta($table)
{
    global $pdo;
    global $cl_id;
    global $pr_id;
    $table_productos = 'productos';

    $cl_id = $_SESSION['id'];
    
    

    
    $query= "SELECT * FROM $table_productos WHERE product_id::varchar IN (SELECT compra.product_id from $table WHERE client_id ='$cl_id')";

    
    $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);

    if (is_array($rows) AND $rows != NULL) {/* Creamos un listado como una tabla HTML*/
        print '<table><thead>';
        foreach($rows[0] as $key => $value) {
            echo "<th>", $key,"</th>";
        }
        
        echo "<th>", 'Eliminar Producto',"</th>";
        
        
        print "</thead>";
        $contador =0;
        foreach ($rows as $row) {
            print "<tr>";
            foreach ($row as $key => $val) {
                echo "<td>", $val, "</td>";
                if ($contador==0){
                    $pr_id=$val;
                    
                }
                $contador=$contador+1;
                
            }
            $contador=0;
            
                echo '<td><a href="portal.php?action=delete&item_id='.$pr_id.'">Descartar </a></td>';
                
            
            
            print "</tr>";
        }
        print "</table>";
        
    } 
    else
        print "<h1> No hay resultados </h1>"; 
}

?>