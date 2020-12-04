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
    
	<form class="formularz1" action="inks.php" method="POST">
        <h2 class="naglowek">Formularz książki:</h2>
	<ul>
	<li>
		<input type="text" name="autor" class="field-style field-full align-left" placeholder="Autor" />
	</li>
	<li>
		<input type="text" name="tytul" class="field-style field-full align-left" placeholder="Tytuł" />
	</li>
	<li>
	<input type="submit" value="Dodaj" />
	</li>
	</ul>
	</form>
    
<?php
    echo("<hr>");
    function tabelka($sql, $nazwa){
        require("connect.php");
        $result=$conn->query($sql);
        echo("<div>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("<table class='table1'>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
            echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['AutorID']."</td><td>".$row['Autor']."</td><td>".$row['Tytul']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
    }

    tabelka("select bAutor.id as AutorID, bAutor.autor as Autor, bTytul.tytul as Tytul from bAutor, bTytul, bAutor_bTytul where (bAutorID=bAutor.id) and (bTytulID=bTytul.id) order by AutorID", "Książki i ich autorzy:");

    function tabelka1($sql, $nazwa, $thname, $row1){
        require("connect.php");
        $result=$conn->query($sql);
        echo("<div>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("<table style='width:25%'>");
            echo("<th>ID</th>");
            echo("<th>$thname</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row[$row1]."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
    }
    
    tabelka1("select * from bAutor order by id", "Autorzy:", "Autorzy", 'autor');

    tabelka1("select * from bTytul order by id", "Książki:", "Tytuły", 'tytul');


?>