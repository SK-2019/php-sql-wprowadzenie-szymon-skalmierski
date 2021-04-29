<?php include "/app/assets/body.html" ?>
<?php
require("../functiondel.php");

        // LEKARZE I PACJENCI
        echo("<div class='wiele1'>");
        require("/app/assets/connect.php");
        $sql= "select *, lekarz_pacjent.id as mid from lekarz,pacjent,lekarz_pacjent where (lekarz.id=idLekarz) and (pacjent.id=idPacjent)";
        $result=$conn->query($sql);
            echo("<table class='mtable'>");
            echo("<caption>");
            echo("<div class='div1'>Lekarze i ich pacjenci:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Lekarz</th>");
                echo("<th>Pacjent</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['mid']."</td><td>".$row['lekarz']."</td><td>".$row['pacjent']."</td>");
                        del("<input type='hidden' name=mid value='".$row['mid']."'>", "delwiele3.php");
                        echo("</tr>");
                    }
            echo("</table>");
    
        $sql="select * from lekarz";
        $result=$conn->query($sql);
            echo("<table class='mtable'>");
            echo("<caption>");
            echo("<div class='div1'>Lekarze:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Lekarz</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['lekarz']."</td>");
                        del("<input type='hidden' name=lid value='".$row['id']."'>", "delwiele3.php");
                        echo("</tr>");
                    }
            echo("</table>");
        
            

        $sql="select * from pacjent";
        $result=$conn->query($sql);
            echo("<table class='stable'>");
            echo("<caption>");
            echo("<div class='div1'>Pacjenci:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Pacjent</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['pacjent']."</td>");
                        del("<input type='hidden' name=pid value='".$row['id']."'>", "delwiele3.php");
                        echo("</tr>");
                    }
            echo("</table>");
        echo("</div>");
        echo("</div>");
?>