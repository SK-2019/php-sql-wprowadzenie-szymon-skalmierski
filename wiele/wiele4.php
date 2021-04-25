<?php include "/app/assets/body.html" ?>
<?php
        // NAUCZYCIELE I KLASY
        echo("<div class='wiele1'>");
        require("/app/assets/connect.php");
        $sql= "select *, nauczyciel.id as nauczycielID from nauczyciel,klasa,nauczyciel_klasa where (nauczyciel.id=IDnauczyciel) and (klasa.id=IDklasa)";
        $result=$conn->query($sql);
            echo("<table class='mtable'>");
            echo("<caption>");
            echo("<div class='div1'>Nauczyciele i ich klasy:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Nauczyciel</th>");
                echo("<th>Klasa</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['nauczycielID']."</td><td>".$row['nauczyciel']."</td><td>".$row['klasa']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
    
        $sql="select * from nauczyciel";
        $result=$conn->query($sql);
            echo("<table class='mtable'>");
            echo("<caption>");
            echo("<div class='div1'>Nauczyciele:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Nauczyciel</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['nauczyciel']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        
        $sql="select * from klasa";
        $result=$conn->query($sql);
            echo("<table class='stable'>");
            echo("<caption>");
            echo("<div class='div1'>Klasy:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Klasa</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['klasa']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        echo("</div>");
        echo("</div>");
?>