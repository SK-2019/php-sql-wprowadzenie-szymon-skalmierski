<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
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
	
	<div class="nav">
		<a  class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>	
		<a  class="nav1" href="index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="data.php"><b>Data</b></a>
		<a  class="nav2" href="formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="daneDoBazy.html"><b>DaneDoBazy</b></a>
	</div>
	<hr>

			<!-- Formularz1 -->
	<form class="formularz1" action="insert.php" method="POST">
        <h2 class="naglowek">Formularz:</h2>
	<ul>
	<li>
		<input type="text" name="imie" class="field-style field-split align-left" placeholder="Imię" />
        <select name="dzial" class="field-style field-split align-right">
        <option value="1">Dział 1 - Serwis</option>
        <option value="2">Dział 2 - Handel</option>
		<option value="3">Dział 3 - Marketing</option>
		<option value="4">Dział 4 - IT</option>
        </select>
	</li>
	<li>
		<input type="text" name="zarobki" class="field-style field-split align-left" placeholder="Zarobki" />
		<input type="date" name="data_ur" class="field-style field-split align-right" min="1940-01-01" max="2020-12-31" />
	</li>
	<li>
	<input type="submit" value="Dodaj" />
	</li>
	</ul>
	</form>

			<!-- Formularz2 -->
	<form class="formularz2" action="delete.php" method="POST">
        <h2 class="naglowek">Formularz:</h2>
	<ul>
	<li>
		<input type="text" name="id" class="field-style field-full" placeholder="ID" required />
	</li>
	<li>
	<input type="submit" value="Usuń" />
	</li>
	</ul>
	</form>
	<br>
<?php
	require("connect.php");
	$sql = "select * from pracownicy, organizacja where dzial=id_org order by id_pracownicy";
        $result=$conn->query($sql);
		echo("<div>Wszyscy pracownicy:</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("<table class='tabledel'>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data Urodzenia</th>");
            echo("<th>DELETE</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
                    echo("<td><form action='delete.php' method=POST><input type='hidden' name='id' value='".$row['id_pracownicy']."'><input id='delemp1' type='submit' value='X'></form></td>");
                    echo("</tr>");
                }
        echo("</table>");
		echo("<hr>");
?>
</body>
</head>
</html>