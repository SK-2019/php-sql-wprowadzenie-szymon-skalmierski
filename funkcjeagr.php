<head>
	<title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1> Szymon Skalmierski nr26 </h1>
	<a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>	
</body>

	<div class="nav">
		<a  class="nav1" href="index.php"><b>Strona Główna</b></a>
		<a  class="nav1" href="funkcjeagr.php"><b>Funkcje Agregujące</b></a>
		<a  class="nav1" href="pracownicy.php"><b>Pracownicy</b></a>
	</div>

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
   
    tabelka1("select avg(zarobki) as yavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Średnie zarobki pracowników:", "Średnia", "yavg");

    tabelka1("select count(imie) as mycount, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial order by dzial", "Liczba mężczyzn:", "Liczba", "mycount");

    tabelka1("select max(zarobki) as mymax, nazwa_dzial from pracownicy, organizacja where dzial=id_org and dzial=2 group by dzial", "Maksymalne zarobki z działu 2:", "Maks", "mymax");

    tabelka1("select min(zarobki) as mymin, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial", "Minimalne zarobki mężczyzn:", "Min", "mymin");
    
    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Suma zarobków:", "Suma", "mysum");

    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial having mysum<28", "Suma zarobków w poszczególnych działach mniejsza od 28:", "Suma", "mysum");
    
    tabelka1("select avg(zarobki) as myavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (imie not like '%a') group by dzial having myavg>30", "Średnie zarobków mężczyzn w poszczególnych działach większe od 30:", "Średnia", "myavg");
?>