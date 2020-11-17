<head>
	<title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
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
    <form>
        <input type="text" name="firstname"></br>
		<input type="submit" value="Submit">
	</form>
    
</body>

	<div class="nav">
		<a  class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>	
		<a  class="nav1" href="index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="funkcjeagr.php"><b>Funkcje Agregujące</b></a>
		<a  class="nav1" href="data.php"><b>Data</b></a>
	</div>
<?php
    echo("<hr>");
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

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and dzial=2", "Pracownicy z działu 2:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and (dzial=2 or dzial=3)", "Pracownicy z działu 2 i 3:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and zarobki<30", "Pracownicy z zarobkami mniejszymi niż 30:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=4)", "Pracownicy z działu 1 i 4:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and imie like '%a'", "Kobiety:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and imie not like '%a'", "Mężczyźni:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org order by imie desc", "Pracownicy posortowani malejąco wg imienia:");
 
    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and dzial=3 order by imie", "Pracownicy z działu 3 posortowani rosnąco po imieniu:");
    
    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and imie like '%a' order by imie", "Kobiety posortowane rosnąco po imieniu:");
    
    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and (dzial=1 or dzial=3) and imie like '%a' order by zarobki", "Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach:");

    tabelka4("select id_pracownicy, imie, nazwa_dzial, zarobki from pracownicy, organizacja where dzial=id_org and imie not like '%a' order by nazwa_dzial asc, zarobki asc", "Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków:");

?>
