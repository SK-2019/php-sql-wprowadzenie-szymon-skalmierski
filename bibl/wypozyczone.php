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
		<a  class="nav1" href="index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="/pracownicy/pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="/pracownicy/funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="/pracownicy/data.php"><b>Data</b></a>
        <a  class="nav3" href="/bibl/ksiazki.php"><b>Książki</b></a>
        <a  class="nav3" href="/bibl/wypozyczone.php"><b>Wypożyczone</b></a>
        <a  class="nav3" href="/bibl/oddane.php"><b>Oddane</b></a>
		<a  class="nav2" href="/pracownicy/formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="/pracownicy/daneDoBazy.php"><b>DaneDoBazy</b></a>
    </div>

<?php
        require('../connect.php');
    echo '<form class="formularz2" action="/bibl/inwy.php" method="POST">';
    echo '<h2 class="naglowek">Wypożyczenie książki:</h2>';
    echo '<ul>';
    echo '<li>';
            $sql=('SELECT * FROM bAutor');
            $result=$conn->query($sql);               
    echo '<select name="autor" class="field-style field-full">';
        while($row=$result->fetch_assoc()){
            echo("<option value='".$row['autor']."'>".$row['autor']."</option>");
        }
    echo '</select>';
    echo '</li>';
    echo '<li>';
            $sql=('SELECT * FROM bTytul');
            $result=$conn->query($sql);
    echo '<select name="tytul" class="field-style field-full">';
        while($row=$result->fetch_assoc()){
            echo("<option value='".$row['tytul']."'>".$row['tytul']."</option>");
        }
    echo("</select>");
    echo '</li>';
    echo '<li>';
    echo '<input type="submit" value="Dodaj" />';
    echo '</li>';
    echo '</ul>';
    echo '</form>';


    echo("<hr>");
    $sql="select * from bwyp";
    echo("<div>Wypożyczone książki:</div>");
    $result=$conn->query($sql);
    echo("<table class='tabledel' style='width:50%'>");
        echo("<th>ID</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytul</th>");
        echo("<th>Wypożyczenie</th>");
        echo("<th>USUŃ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td><td>".$row["datawy"]."</td>");
                    echo("<td><form action='/bibl/delwy.php' method=POST>");
                    echo("<input type='hidden' name='id' value='".$row['id']."'>");
                    echo("<input type='hidden' name='autor' value='".$row['autor']."'>");
                    echo("<input type='hidden' name='tytul' value='".$row['tytul']."'>");
                    echo("<input type='hidden' name='datawy' value='".$row['datawy']."'>");
                    echo("<input id='delemp1' type='submit' value='X'>");
                    echo("</form></td>");
                echo("</tr>");
            }
    echo("</table>");
?>






