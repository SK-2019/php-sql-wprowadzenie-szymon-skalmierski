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
		<a  class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-szymon-skalmierski"><b>GITHUB</b></a>	
		<a  class="nav1" href="index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="data.php"><b>Data</b></a>
        <a  class="nav1" href="ksiazki.php"><b>Książki</b></a>
		<a  class="nav2" href="formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="daneDoBazy.php"><b>DaneDoBazy</b></a>
    </div>
    
<?php
    echo("<hr>");
    function tabelka($sql, $nazwa){
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
                    echo("<td>".$row['biblAutor.id']."</td><td>".$row['biblAutor.autor']."</td><td>".$row['biblTytul.tytul']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
    }

    tabelka("select * from biblTytul,biblAutor,biblAutor_biblTytul where biblAutor_id=bibleTytul_id", "Książki:");

?>