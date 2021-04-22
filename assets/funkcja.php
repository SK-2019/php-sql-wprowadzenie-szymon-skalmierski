<?php
function tabela($sql,$nazwa)
{
    require("/app/assets/connect.php");

    $result = mysqli_query($conn,$sql);
    $fetchFields = mysqli_fetch_fields($result);
    $fetchValues = mysqli_fetch_fields($result);

    if (mysqli_num_rows($result) > 0) 
    {           
        echo("<div class='div1'>$nazwa</div>")
        echo "<table border=1>";
        echo "<tr>";
        foreach ($fetchFields as $fetchedField)
         {          
            echo "<td>";
            echo "<b>" . $fetchedField->name . "<b></a>";
            echo "</td>";
        }       
        echo "</tr>";
        while($totalRows = mysqli_fetch_array($result)) 
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
    else
    {
      echo "Nie znaleziono rekordów";
    }
}
?>