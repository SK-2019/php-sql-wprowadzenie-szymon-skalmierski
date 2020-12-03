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
            <a  class="nav1" href="ksiazki.php"><b>Książki</b></a>
            <a  class="nav2" href="formularz.html"><b>Formularz</b></a>
		    <a  class="nav2" href="daneDoBazy.php"><b>DaneDoBazy</b></a>
        </div>
        <hr>

<?php
    echo("<h2 class='h2strona'>Dodano do bazy:");
    echo("<h3 class='h3strona'>Autor: ".$_POST['autor']."</h3>");
    echo("<h3 class='h3strona'>Tytuł: ".$_POST['tytul']."</h3>");

    require("connect.php");
        $sql = "INSERT INTO bAutor(id, autor) VALUES(NULL, '".$_POST['autor']."')";
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'>  New record created successfully!</p>");
        } else{
            echo("<p class='precord1'>'Error: ' . $sql . '<br>' . $conn->error</p>");
        }

        $sql = "INSERT INTO bTytul(id, tytul) VALUES(NULL, '".$_POST['tytul']."')";
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'>  New record created successfully!</p>");
        } else{
            echo("<p class='precord1'>'Error: ' . $sql . '<br>' . $conn->error</p>");
        }

        echo("<form action='inks1.php' method=POST>");
        $sql="Select id as IDautor, autor from bAutor where autor = '".$_POST['autor']."'";
        $result=$conn->query($sql);
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["IDautor"]."</td><td>".$row["autor"]."</td>");
                        echo("<input type='hidden' name='IDautor' value='".$row['IDautor']."'>");
                    echo("</tr>");
                }
        echo("</table>");

        $sql="Select id as IDtytul, tytul from bTytul where tytul = '".$_POST['tytul']."'";
        $result=$conn->query($sql);
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Tytul</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['IDtytul']."</td><td>".$row["tytul"]."</td>");
                        echo("<input type='hidden' name='IDtytul' value='".$row['IDtytul']."'>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<div class='submit2'>");
        echo("<input id='delemp2' type='submit' value='MERGE DATA'>");
        echo("</div>");
        echo("</form>");

    // header("location:ksiazki.php");
    // header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>

</body>
</head>
</html>