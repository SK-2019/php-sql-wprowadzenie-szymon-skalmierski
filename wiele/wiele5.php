<?php include "/app/assets/body.html" ?>
<?php
        // PRACOWNICY I PROJEKTY
        echo("<div class='wiele1'>");
        require("/app/assets/connect.php");
        $sql= "select *, pracownik.id as pracownikID from pracownik,projekt,pracownik_projekt,dzial where (pracownik.id=idPracownik) and (projekt.id=idProjekt) and (pracownik.id=dzial.id)";
        $result=$conn->query($sql);
            echo("<table style='width:50%'>");
            echo("<caption>");
            echo("<div class='div1'>Pracownicy i projekty:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Imie</th>");
                echo("<th>Dzial</th>");
                echo("<th>Projekt</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['pracownikID']."</td><td>".$row['imie']."</td><td>".$row['nazwaDzial']."</td><td>".$row['nazwaProjektu']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
    
        $sql="select *,pracownik.id as procownikID from pracownik,dzial where pracownik.id=dzial.id";
        $result=$conn->query($sql);
            echo("<table style='width:50%'>");
            echo("<caption>");
            echo("<div class='div1'>Pracownicy:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Imie</th>");
                echo("<th>Dzial</th>");
                echo("<th>Zarobki</th>");
                echo("<th>Data urodzenia</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['procownikID']."</td><td>".$row['imie']."</td><td>".$row['nazwaDzial']."</td><td>".$row['wynagrodzenie']."</td><td>".$row['dataUrodzenia']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        
        $sql="select * from projekt";
        $result=$conn->query($sql);
            echo("<table style='width:30%;'>");
            echo("<caption>");
            echo("<div class='div1'>Projekty:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Projekt</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['nazwaProjektu']."</td>");
                        echo("</tr>");
                    }
            echo("</table>");
        echo("</div>");
        echo("</div>");
?>