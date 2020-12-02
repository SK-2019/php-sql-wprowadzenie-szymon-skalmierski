<head>
	<title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
</head>
<body>

    <div id="czas"></div>
    <script>
        function getTime(){
        return (new Date()).toLocaleTimeString();
        }
        document.getElementById('czas').innerHTML = getTime();
        setInterval(function(){
        document.getElementById('czas').innerHTML = getTime();
        }, 1000);
    </script>

	<h1>Szymon Skalmierski nr26</h1>

</body>

	<div class="nav">
		<a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>	
		<a  class="nav1" href="index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="data.php"><b>Data</b></a>
        <a  class="nav1" href="ksiazki.php"><b>Książki</b></a>
		<a  class="nav2" href="formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="daneDoBazy.php"><b>DaneDoBazy</b></a>
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

  function tabelka1($zapytanie, $nazwa, $kolumna){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("<table class='table1'>");
            echo("<th>ID</th>");
	    echo("<th>Imie</th>");
	    echo("<th>Dział</th>");
	    echo("<th>Zarobki</th>");
	    echo("<th>$kolumna</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['wiek']."</td>");
                    echo("</tr>");
		}
        echo("</table>");
        echo("<hr>");
     }

	tabelka2("select sum(year(curdate()) - year(data_urodzenia)) as suma from pracownicy", "Suma lat wszystkich pracowników:", "Suma", "suma");

	tabelka2("select sum(year(curdate()) - year(data_urodzenia)) as suma from pracownicy where imie like '%a'", "Suma lat kobiet:", "Suma", "suma");

	tabelka2("select sum(year(curdate()) - year(data_urodzenia)) as suma from pracownicy where imie not like '%a'", "Suma lat mężczyzn:", "Suma", "suma");

	tabelka1("select id_pracownicy, imie, nazwa_dzial, zarobki, date_format(data_urodzenia,'%W-%m-%Y') as wiek from pracownicy, organizacja where id_org=dzial", "Wyświetlanie nazwy dni w dacie urodzenia:", "Data urodzenia");

?>

<?php

        require("connect.php");
	$sql="select id_pracownicy, imie, nazwa_dzial, zarobki, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where id_org=dzial";
        $result=$conn->query($sql);
        echo("<div>Pracownicy + wiek:</div>");
	    echo("<div class='zapytanie'>($sql)</div>");
        echo("<table>");
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

?>
