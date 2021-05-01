<?php
function tabela($sql,$nazwa)
{
    require("/app/assets/connect.php");

    $result = $conn->query($sql);
    $fetchFields = mysqli_fetch_fields($result);
    $fetchValues = mysqli_fetch_fields($result);

    if (mysqli_num_rows($result) > 0) 
    {           
        echo "<table class='mtable'>";
        echo "<caption>";
        echo("<div class='div1'>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo "</caption>";
        echo "<tr>";
        foreach ($fetchFields as $fetchedField)
         {          
            echo "<th>";
            echo "<b>" . $fetchedField->name . "<b></a>";
            echo "</th>";
        }       
        echo "</tr>";
        while($totalRows = $result ->fetch_array()) 
        {           
            echo "<tr>";                                
            for($eachRecord = 0; $eachRecord < count($fetchValues);$eachRecord++)
            {           
                echo "<td>";
                echo $totalRows[$eachRecord];
                echo "</td>";               
            }
            echo "</tr>";           
        } 
        echo "</table>";        
    } 
}
?>