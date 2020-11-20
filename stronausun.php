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
            <a  class="nav1" href="pracownicy.php"><b>Pracownicy</b></a>
            <a  class="nav1" href="funkcjeagr.php"><b>Funkcje Agregujące</b></a>
            <a  class="nav1" href="data.php"><b>Data</b></a>
            <a  class="nav2" href="formularz.html"><b>Formularz</b></a>
        </div>
        <hr>

<?php

    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Dodano do bazy:");
        echo("<h3 class='h3strona'>ID: ".$_POST['id']."</h3>");
    echo("<div>");

	require_once("connect.php");
	$sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  Record deleted successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
      
?>

</body>
</head>
</html>