<?php include "/app/assets/body.html" ?>
<?php
    require("/app/assets/connect.php");
    $sql="select * from bodd";
    $result=$conn->query($sql);
    echo("<table class='ltable'>");
    echo("<caption style='text-align:left'>");
    echo("<div class='div1'>Oddane książki:</div>");
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