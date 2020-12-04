<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
<body class='bodystrona'>

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
        <a  class="nav1" href="pracownicy/pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="pracownicy/funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="pracownicy/data.php"><b>Data</b></a>
        <a  class="nav1" href="bibl/ksiazki.php"><b>Książki</b></a>
		<a  class="nav2" href="pracownicy/formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="pracownicy/daneDoBazy.php"><b>DaneDoBazy</b></a>
        </div>
        <hr>

<?php

    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Wynik:");
        echo("<h3 class='h3strona'>Imię: ".$_POST['imie']."</h3>");
        echo("<h3 class='h3strona'>Dział: ".$_POST['dzial']."</h3>");
        echo("<h3 class='h3strona'>Zarobki: ".$_POST['zarobki']."</h3>");
        echo("<h3 class='h3strona'>Data urodzenia: ".$_POST['data_ur']."</h3>");
    echo("<div>");
 
?>

</body>
</head>
</html>