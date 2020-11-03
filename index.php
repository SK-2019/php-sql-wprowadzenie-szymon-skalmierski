<head>
	<title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Szymon Skalmierski nr26</h1>

</body>

<?php
   
    echo("<hr />");


    function tabelka1($zapytanie, $nazwa, $kolumna, $row1){
        require("connect.php");
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
        echo("<hr>");
        }


    function tabelka4($zapytanie, $nazwa){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div style='font-size:20px; margin-bottom:5px'>$nazwa</div>");
        echo("<table border=1 style='font-size:20px; margin-bottom:20px'>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Zarobki</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
        }

    tabelka4("select * from pracownicy", "Wszyscy pracownicy:");

    tabelka4("select * from pracownicy where imie like '%a'", "Kobiety:");
    
    tabelka1("select avg(zarobki) as yavg, dzial from pracownicy group by dzial", "Średnie zarobki pracowników w poszczególnych działach:", "Średnia", "yavg");

    tabelka1("select count(imie) as mycount, dzial from pracownicy where imie not like '%a' group by dzial order by dzial", "Liczba mężczyzn w poszczególnych działach:", "Liczba", "mycount");

    tabelka1("select max(zarobki) as mymax, dzial from pracownicy where dzial=2 group by dzial", "Maksymalne zarobki z działu 2:", "Maks", "mymax");

    tabelka1("select min(zarobki) as mymin, dzial from pracownicy where imie not like '%a' group by dzial", "Minimalne zarobki mężczyzn:", "Min", "mymin");

    tabelka1("select sum(zarobki) as mysum, dzial from pracownicy where dzial=1 or dzial=2 group by dzial", "Suma zarobków z działu 1 i 2:", "Suma", "mysum");
 
    tabelka1("select avg(zarobki) as myavg, dzial from pracownicy group by dzial having myavg<35", "Średnie zarobki pracowników w poszczególnych działach mniejsze od 35:", "Średnia", "myavg");

?>
