<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="/style.css">
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
		<a  class="nav1" href="/index.php"><b>Strona Główna</b></a>
        <a  class="nav1" href="/pracownicy/pracownicy.php"><b>Pracownicy</b></a>
		<a  class="nav1" href="/pracownicy/funkcjeagr.php"><b>Funkcje Agregujące</b></a>
        <a  class="nav1" href="/pracownicy/data.php"><b>Data</b></a>
        <a  class="nav1" href="/bibl/ksiazki.php"><b>Książki</b></a>
        <a  class="nav1" href="/bibl/wypozyczone.php"><b>Wypożyczone</b></a>
        <a  class="nav1" href="/bibl/oddane.php"><b>Oddane</b></a>
		<a  class="nav2" href="/pracownicy/formularz.html"><b>Formularz</b></a>
		<a  class="nav2" href="/pracownicy/daneDoBazy.php"><b>DaneDoBazy</b></a>
    </div>
        <hr>

<?php
    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Usunięto z bazy:");
        echo("<h3 class='h3strona'>ID: ".$_POST['id']."</h3>");

	require_once("../connect.php");
	$sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  Record deleted successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
    echo("</div>");  
    
    header("location:https://git-website-com.herokuapp.com/pracownicy/daneDoBazy.php");
	// header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>

</body>
</head>
</html>