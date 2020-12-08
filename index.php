<?php 
    include "body.html" 
?>
<?php
    function tabelka4($zapytanie, $nazwa){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Zarobki</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
        }

    tabelka4("select * from pracownicy, organizacja where dzial=id_org and dzial=2", "Pracownicy z działu 2:");

    tabelka4("select * from pracownicy, organizacja where dzial=id_org and (dzial=2 or dzial=3)", "Pracownicy z działu 2 i 3:");

    tabelka4("select * from pracownicy, organizacja where dzial=id_org and zarobki<30", "Pracownicy z zarobkami mniejszymi niż 30:");

    tabelka4("select * from pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=4)", "Pracownicy z działu 1 i 4:");

    tabelka4("select * from pracownicy, organizacja where dzial=id_org and imie like '%a'", "Kobiety:");

    tabelka4("select * from pracownicy, organizacja where dzial=id_org and imie not like '%a'", "Mężczyźni:");

    tabelka4("select * from pracownicy, organizacja where dzial=id_org order by imie desc", "Pracownicy posortowani malejąco wg imienia:");
 
    tabelka4("select * from pracownicy, organizacja where dzial=id_org and dzial=3 order by imie", "Pracownicy z działu 3 posortowani rosnąco po imieniu:");
    
    tabelka4("select * from pracownicy, organizacja where dzial=id_org and imie like '%a' order by imie", "Kobiety posortowane rosnąco po imieniu:");
    
    tabelka4("select * from pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=3) and imie like '%a' order by zarobki", "Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach:");

    tabelka4("select * from pracownicy, organizacja where dzial=id_org and imie not like '%a' order by nazwa_dzial asc, zarobki asc", "Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków:");
?>
