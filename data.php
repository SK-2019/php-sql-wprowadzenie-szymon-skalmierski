<head>
	<title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1> Szymon Skalmierski nr26 </h1>
</body>

	<div class="nav">
		<a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>	
		<a  class="nav1" href="index.php"><b>Strona Główna</b></a>
		<a  class="nav1" href="funkcjeagr.php"><b>Funkcje Agregujące</b></a>
		<a  class="nav1" href="pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="data.php"><b>Data</b></a>
	</div>
	<hr>
<?php
    function tabelka2($zapytanie, $nazwa, $kolumna, $row1){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("<table class='table2'>");
            echo("<th>$kolumna</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td>");
                    echo("</tr>");
		}
        echo("</table>");
        echo("<hr>");
    }

  function tabelka1($zapytanie, $nazwa){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("<table class='table2'>");
            echo("<th>ID</th>");
	    echo("<th>Imie</th>");
	    echo("<th>Dział</th>");
	    echo("<th>Zarobki</th>");
	    echo("<th>Wiek</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['wiek']."</td>");
                    echo("</tr>");
		}
        echo("</table>");
        echo("<hr>");
     }
	tabelka1("select id_pracownicy, imie, nazwa_dzial, zarobki, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where id_org=dzial", "Pracownicy + wiek:");

	tabelka2("select sum(year(curdate()) - year(data_urodzenia)) as suma from pracownicy, organizacja where id_org=dzial", "Suma lat wszystkich pracowników:", "Suma", "suma");
?>
