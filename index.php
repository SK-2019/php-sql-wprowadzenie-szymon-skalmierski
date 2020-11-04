<head>
	<title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Szymon Skalmierski nr26</h1><a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>

</body>

<?php
   
    echo("<hr>");


    function tabelka1($zapytanie, $nazwa, $kolumna, $row1){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
        echo("<table class='table2'>");
            echo("<th>$kolumna</th>");
            echo("<th>Dział</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
        }


    function tabelka4($zapytanie, $nazwa){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
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

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org", "Wszyscy pracownicy:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and imie like '%a'", "Kobiety:");
    
    tabelka1("select avg(zarobki) as yavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Średnie zarobki pracowników w poszczególnych działach:", "Średnia", "yavg");

    tabelka1("select count(imie) as mycount, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial order by dzial", "Liczba mężczyzn w poszczególnych działach:", "Liczba", "mycount");

    tabelka1("select max(zarobki) as mymax, nazwa_dzial from pracownicy, organizacja where dzial=id_org and dzial=2 group by dzial", "Maksymalne zarobki z działu 2:", "Maks", "mymax");

    tabelka1("select min(zarobki) as mymin, nazwa_dzial from pracownicy, organizacja where dzial=id_org nad imie not like '%a' group by dzial", "Minimalne zarobki mężczyzn:", "Min", "mymin");

    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=2) group by dzial", "Suma zarobków z działu 1 i 2:", "Suma", "mysum");


?>
