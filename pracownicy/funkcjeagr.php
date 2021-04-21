<?php include "/app/assets/body.html" ?>
<?php
    function tabelka1($zapytanie, $nazwa, $kolumna, $row1){
        require("/app/assets/connect.php");
        $result=$conn->query($zapytanie);
        echo("<table style='width:47%'>");
        echo("<caption>");
        echo("<div class='div1'>$nazwa</div>");
        echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("</caption>");
        echo("<th>$kolumna</th>");
        echo("<th>Dział</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
     }
    function tabelka2($zapytanie, $nazwa, $kolumna, $row1){
        require("/app/assets/connect.php");
        $result=$conn->query($zapytanie);
        echo("<table style='width:47%'>");
        echo("<caption>");
        echo("<div style='margin-top:20px'>$nazwa</div>");
        echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("</caption>");
        echo("<th>$kolumna</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td>");
                    echo("</tr>");
        }
        echo("</table>");
     }
    function tabelka3($zapytanie, $nazwa, $kolumna, $row1){
        require("/app/assets/connect.php");
        $result=$conn->query($zapytanie);
        echo("<table style='width:47%'>");
        echo("<caption>");
        echo("<div style='margin-top:20px'>$nazwa</div>");
        echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("</caption>");
        echo("<th>$kolumna</th>");
	    echo("<th>Płeć</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td><td>".$row['plec1']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
     }

    tabelka2("select sum(zarobki) as mysum from pracownicy", "Suma zarobków wszystkich pracowników:", "Suma", "mysum");

    tabelka2("select sum(zarobki) as mysum from pracownicy where imie like '%a'", "Suma zarobków wszystkich kobiet:", "Suma", "mysum");
    
    tabelka2("select count(imie) as myc from pracownicy", "Ilu jest wszystkich pracowników:", "Liczba", "myc");

    tabelka2("select count(imie) as myc from pracownicy where imie like '%a' and (dzial=1 or dzial=3)", "Ile kobiet pracuje łącznie w działach 1 i 3:", "Liczba", "myc");

    tabelka2("select avg(zarobki) as myavg from pracownicy where imie not like '%a'", "Średnia zarobków wszystkich mężczyzn:", "Średnia", "myavg");

    tabelka2("select min(zarobki) as mymin from pracownicy where imie not like '%a'", "Najmniejsze zarobki ze wszystkich mężczyzn:", "Zarobki", "mymin");

    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (imie not like '%a') and (dzial=2 or dzial=3) group by dzial", "Suma zarobków mężczyzn z dzialu 2 i 3:", "Suma", "mysum");

    tabelka1("select avg(zarobki) as myavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (imie not like '%a') and (dzial=1 or dzial=2) group by dzial", "Średnia zarobków mężczyzn z działu 1 i 2:", "Średnia", "myavg");

    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Suma zarobków w poszczególnych działach:", "Suma", "mysum");

    tabelka1("select count(zarobki) as myc, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Ilość pracowników w poszczególnych działach:", "Liczba", "myc");

    tabelka1("select avg(zarobki) as myavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Średnie zarobków w poszczególnych działach:", "Średnia", "myavg");

    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Suma zarobków pracowników:", "Suma", "mysum");

    tabelka1("select count(imie) as myc, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial order by dzial", "Liczba mężczyzn:", "Liczba", "myc");

    tabelka1("select count(imie) as myc, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial order by dzial", "Liczba kobiet:", "Liczba", "myc");

    tabelka1("select min(zarobki) as mymin, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial", "Minimalne zarobki mężczyzn:", "Min", "mymin");
    
    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Suma zarobków:", "Suma", "mysum");
    
    tabelka3("select avg(zarobki) as myavg, if(imie like '%a', 'Kobiety', 'Mężczyźni') as plec1 from pracownicy group by plec1", "Średnia zarobków kobiet i mężczyzn:", "Średnia", "myavg");
    
    tabelka3("select sum(zarobki) as mysum, if(imie like '%a', 'Kobiety', 'Mężczyźni') as plec1 from pracownicy group by plec1", "Suma zarobków kobiet i mężczyzn:", "Suma", "mysum");
?>
    </div>
</div>