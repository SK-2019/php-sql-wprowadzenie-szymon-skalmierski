<head>
	<title>Szymon Skalmierski 2Ti</title>
    <link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
</head>

<?php
    
    echo("<div style='font-size:40px; margin-bottom:20px'><b>Szymon Skalmierski nr26</b></div>");
    echo("<hr />");
    function tabelka($zapytanie, $nazwa, $kolumna, $row1){
    include("connect.php");
    $result=$conn->query($zapytanie);
    echo("<div style='font-size:20px; margin-bottom:5px'>$nazwa</div>");
    echo("<table border=1 style='font-size:20px; margin-bottom:20px'>");
        echo("<th>$kolumna</th>");
        echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row[$row1]."</td><td>".$row['dzial']."</td>");
                echo("</tr>");
            }
    echo("</table>");
    }

    tabelka("select avg(zarobki) as myavg, dzial from pracownicy group by dzial", "Średnie zarobki pracowników w poszczególnych działach:", "Średnia", "myavg");
    echo("<hr />");
    tabelka("select count(zarobki) as mycount, dzial from pracownicy where imie like '%a' group by dzial", "Liczba mężczyzn w poszczególnych działach:", "Liczba", "mycount");
    echo("<hr />");
    tabelka("select max(zarobki) as mymax, dzial from pracownicy where dzial=2 group by dzial", "Maksymalne zarobki z działu 2:", "Maks", "mymax");
    echo("<hr />");
    tabelka("select min(zarobki) as mymin, dzial from pracownicy where imie not like '%a' group by dzial", "Minimalne zarobki mężczyzn:", "Min", "mymin");
    echo("<hr />");
    tabelka("select sum(zarobki) as mysum, dzial from pracownicy where dzial=1 or dzial=2 group by dzial", "Suma zarobków z działu 1 i 2:", "Suma", "mysum");
    echo("<hr />");
    tabelka("select avg(zarobki) as myavg, dzial from pracownicy group by dzial having myavg<35", "Średnie zarobki pracowników w poszczególnych działach mniejsze od 35:", "Średnia", "myavg");
    echo("<hr />");

?>