<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");
require("/app/assets/connect.php");

        // PRACOWNICY I PROJEKTY
        tabdel("select pracownik_projekt.id as mid,imie,nazwaDzial, nazwaProjektu from pracownik,projekt,pracownik_projekt,dzial where (pracownik.id=idPracownik) and (projekt.id=idProjekt) and (dzial_id=dzial.id)", "Pracownicy i projekty","delwiele5.php","mid","mid");
        
        
        $sql="select *,pracownik.id as procownikID from pracownik,dzial where dzial_id=dzial.id";
        $result=$conn->query($sql);
            echo("<table class='mtable'>");
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
                        del("<input type='hidden' name=praid value='".$row['procownikID']."'>", "delwiele5.php");
                        echo("</tr>");
                    }
            echo("</table>");
        
        $sql="select * from projekt";
        $result=$conn->query($sql);
            echo("<table class='stable'>");
            echo("<caption>");
            echo("<div class='div1'>Projekty:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Projekt</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['nazwaProjektu']."</td>");
                        del("<input type='hidden' name=proid value='".$row['id']."'>", "delwiele5.php");
                        echo("</tr>");
                    }
            echo("</table>");
        echo("</div>");
        echo("</div>");
?>