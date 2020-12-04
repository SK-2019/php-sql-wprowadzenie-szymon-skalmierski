<head>
	<title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
    <link rel="stylesheet" href="/style.css">
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
		<a  class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>	
		<a  class="nav1" href="/index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="pracownicy/pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="pracownicy/funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="pracownicy/data.php"><b>Data</b></a>
        <a  class="nav1" href="bibl/ksiazki.php"><b>Książki</b></a>
		<a  class="nav2" href="pracownicy/formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="pracownicy/daneDoBazy.php"><b>DaneDoBazy</b></a>
    </div>

<?php
    echo("<hr>");
    function tabelka4($sql, $nazwa){
        require("connect.php");
        $result=$conn->query($sql);
        echo("<div>$nazwa</div>");
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
                    echo("<td><form action='delete.php' method=POST>");
                    echo("<input type='hidden' name='id' value='".$row['id_pracownicy']."'><input id='delemp1' type='submit' value='X'>");
                    echo("</form></td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
    }
    tabelka4("select * from pracownicy, organizacja where dzial=id_org order by id_pracownicy", "Wszyscy pracownicy:");
?>

