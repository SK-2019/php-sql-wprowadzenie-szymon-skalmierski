<?php
require("/app/assets/connect.php");

function minform($action,$header,$sql1,$name1,$rowid1,$rowname1,$sql2,$name2,$rowid2,$rowname2,){
    echo "<form style='margin: 15px' class='formularz0' action=$action method='POST'>";
        echo "<h2 class='naglowek'>$header</h2>";
        echo "<ul>";
        echo "<li>";
            $result=$conn->query($sql1);               
            echo "<select name=$name1 class='field-style field-full'>";
                while($row=$result->fetch_assoc()){
                echo("<option value='".$row[$rowid1]."'>".$row[$rowname1]."</option>");
                }
            echo "</select>";
            }
        echo "</li>";
        echo "<li>";
        $result=$conn->query($sql1);               
            echo "<select name=$name1 class='field-style field-full'>";
                while($row=$result->fetch_assoc()){
                echo("<option value='".$row[$rowid1]."'>".$row[$rowname1]."</option>");
                }
            echo "</select>";
            }
        echo "</li>";
        echo "<li>";
        echo "<input type='submit' value='Dodaj' />";
        echo "</li>";
        echo "</ul>";
    echo "</form>";
}

function inform($action,$header,$name,$placeholder){
    echo "<form style='margin:15px' class='formularz0' action=$action method='POST'>";
       echo "<h2 class='naglowek'>$header</h2>";
       echo "<ul>";
       echo "<li>";
           echo "<input type='text' name=$name class='field-style field-full' placeholder=$placeholder />";
       echo "</li>";
       echo "<li>";
           echo "<input type='submit' value='Dodaj' />";
       echo "</li>";
       echo "<li>";
       echo "</li>";
       echo "</ul>";
   echo "</form>";
}
?>