<?php include "/app/assets/body.html" ?>
<?php
        // OSOBY I ROLE
        echo("<div class='wiele1'>");
        require("/app/assets/connect.php");
        $sql= "select *, osoba.id as osobaID from osoba,rola,osoba_rola where (osoba.id=idOsoba) and (rola.id=idRola)";
        $result=$conn->query($sql);
            echo("<table style='width:50%'>");
            echo("<caption>");
            echo("<div class='div1'>Osoby i role:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Imie</th>");
                echo("<th>Nazwisko</th>");
                echo("<th>Rola</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['osobaID']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['nazwaRoli']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
    
        $sql="select * from osoba";
        $result=$conn->query($sql);
            echo("<table style='width:50%'>");
            echo("<caption>");
            echo("<div class='div1'>Osoby:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Imie</th>");
                echo("<th>Nazwisko</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        
        $sql="select * from rola";
        $result=$conn->query($sql);
            echo("<table style='width:30%;'>");
            echo("<caption>");
            echo("<div class='div1'>Role:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Rola</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['nazwaRoli']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        echo("</div>");
        echo("</div>");
?>