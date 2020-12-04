<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="/style.css">
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
		<a  class="nav1" href="/index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="/pracownicy/pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="/pracownicy/funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="/pracownicy/data.php"><b>Data</b></a>
        <a  class="nav1" href="/bibl/ksiazki.php"><b>Książki</b></a>
		<a  class="nav2" href="/pracownicy/formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="/pracownicy/daneDoBazy.php"><b>DaneDoBazy</b></a>
    </div>
        <hr>

<?php
    echo("<h2 class='h2strona'>Dodano do bazy:");

    require("../connect.php");
        $sql = "INSERT INTO bwyp(id, autor, tytul) VALUES(NULL, '".$_POST['autor']."','".$_POST['tytul']."')";
        echo("<h3 class='h3strona'>Książka: ".$_POST['tytul']."</h3>");
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'> Książka została dodana do wypożyczonych!</p>");
        } else{
            echo("<p class='precord1'> Książka jest już wypożyczona!</p>");
        }


    header("location:/bibl/wypozyczone.php");
    // header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>

</body>
</head>
</html>