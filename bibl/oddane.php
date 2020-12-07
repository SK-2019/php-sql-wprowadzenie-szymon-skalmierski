<?php include "../body.html" ?>
<?php
    require("../connect.php");
    echo("<hr>");
    $sql="select * from bodd";
    echo("<div>Oddane książki:</div>");
    $result=$conn->query($sql);
    echo("<table class='tabledel' style='width:60%'>");
        echo("<th>ID</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytul</th>");
        echo("<th>Data wypożyczenia</th>");
        echo("<th>Data oddania</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td><td>".$row["datawy"]."</td><td>".$row["datazw"]."</td>");
                echo("</tr>");
            }
    echo("</table>");
?>