<?php

function table2html($table)
{
    global $pdo;
    global $cl_id;
    global $pr_id;

    
    $cl_id = $_SESSION['id'];

  

    
    

    $query = "SELECT * FROM  $table;";
    
    $rows = $pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);

    if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
        print '<table><thead>';
        foreach($rows[0] as $key => $value) {
            echo "<th>", $key,"</th>";
        }
        if ($_SESSION['usuario'][0] == 'n'){
            echo "<th>", 'Compra',"</th>";
        }
        
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
            if ($_SESSION['usuario'][0] == 'n'){
                echo '<td><a href="portal.php?action=add&client_id='.$cl_id.'&product_id='.$pr_id.'">Añadir a Cesta</a></td>';
            }
            
            print "</tr>";
        }
        print "</table>";
    } 
    else
        print "<h1> No hay resultados </h1>"; 
}

?>