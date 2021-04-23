<?php include "/app/assets/body.html" ?>
<?php
        // LEKARZE I PACJENCI
        echo("<div class='wiele1'>");
        require("/app/assets/connect.php");
        $sql= "select *, lekarz.id as lekarzID from lekarz,pacjent,lekarz_pacjent where (lekarz.id=idLekarz) and (pacjent.id=idPacjent)";
        $result=$conn->query($sql);
            echo("<table style='width:50%'>");
            echo("<caption>");
            echo("<div class='div1'>Lekarze i ich pacjenci:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Lekarz</th>");
                echo("<th>Pacjent</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['lekarzID']."</td><td>".$row['lekarz']."</td><td>".$row['pacjent']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
    
        $sql="select * from lekarz";
        $result=$conn->query($sql);
            echo("<table style='width:50%'>");
            echo("<caption>");
            echo("<div class='div1'>Lekarze:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Lekarz</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['lekarz']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        
        $sql="select * from pacjent";
        $result=$conn->query($sql);
            echo("<table style='width:30%;'>");
            echo("<caption>");
            echo("<div class='div1'>Pacjenci:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Pacjent</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['pacjent']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        echo("</div>");
        echo("</div>");
?>