<?php include "../assets/body.html" ?>
    <div class='phpp'>
<?php
    echo("<div class='wiele1'>");
    require("../assets/connect.php");
    $result=$conn->query('select * from pracownik,dzial where (dzial_id=dzial.id) order by nazwaDzial');
        echo("<table style='width:55%'>");
        echo("<caption>");
        echo("<div class='div1'>Pracownicy w działach:</div>");
        echo("<div class='zapytanie'>('select * from pracownik,dzial where (dzial_id=dzial.id) order by nazwaDzial')</div>");
        echo("<caption>");
            echo("<th>Nazwa Działu</th>");
            echo("<th>Imię</th>");
            echo("<th>Wynagrodzenie</th>");
            echo("<th>Data Urodzenia</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['nazwaDzial']."</td><td>".$row['imie']."</td><td>".$row['wynagrodzenie']."</td><td>".$row['dataUrodzenia']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
    
    $result=$conn->query("select * from pracownik order by id");
        echo("<table style='width:40%'>");
        echo("<caption>");
        echo("<div class='div1'>Pracownicy:</div>");
        echo("<div class='zapytanie'>(select * from pracownik order by id)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>ID Działu</th>");
            echo("<th>Wynagrodzenie</th>");
            echo("<th>Data Urodzenia</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['dzial_id']."</td><td>".$row['wynagrodzenie']."</td><td>".$row['dataUrodzenia']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
    
    $result=$conn->query("select * from dzial order by id");
        echo("<table style='width:40%'>");
        echo("<caption>");
        echo("<div class='div1'>Działy:</div>");
        echo("<div class='zapytanie'>(select * from dzial order by id)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Nazwa Działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nazwaDzial']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("</div>");
?>