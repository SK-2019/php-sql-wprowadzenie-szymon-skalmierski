<?php include "../body.html" ?>
    <div class='phpp'>
<?php
    require("../connect.php");
    $sql="select * from bodd";
    $result=$conn->query($sql);
    echo("<table class='tabledel' style='width:90%'>");
    echo("<caption style='text-align:left'>");
    echo("<div>Oddane książki:</div>");
    echo("</caption>");
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
    </div>
</div>