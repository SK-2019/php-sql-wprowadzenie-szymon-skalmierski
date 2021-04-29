<?php
function tabdelm($sql, $nazwa, $file, $name, $rowname, $tclass)
{
    require("/app/assets/connect.php");

    $result = $conn->query($sql);
    $fetchFields = mysqli_fetch_fields($result);
    $fetchValues = mysqli_fetch_fields($result);

    if (mysqli_num_rows($result) > 0) 
    {           
        echo "<table class='$tclass'>";
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
        echo "<th>DELETE</th>"; 
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
            echo("<td><form action=$file method=POST><input type='hidden' name=$name value='".$row[$rowname]."'><input id='delemp1' type='submit' value='X'></form></td>");
            echo "</tr>";           
        } 
        echo "</table>";        
    } 
    else
    {
      echo "<div class='div1'>Nie znaleziono rekordów</div>";
    }
}
?>