<?php include "/app/assets/body.html" ?>
<?php

        // KSIĄŻKI I AUTORZY
    echo("<div class='wiele1'>");
    require("/app/assets/connect.php");
    $result=$conn->query('select *, autor.id as autorid from autor,tytul,autor_tytul where (autor.id=autor_id) and (tytul.id=tytul_id) order by autor.id');
        echo("<table style='width:50%'>");
        echo("<caption>");
        echo("<div class='div1'>Autorzy i ich dzieła:</div>");
        echo("<div class='zapytanie'>(select *, autor.id as autorid from autor,tytul,autor_tytul where (autor.id=autor_id) and (tytul.id=tytul_id) order by autor.id)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Nazwisko</th>");
            echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['autorid']."</td><td>".$row['nazwisko']."</td><td>".$row['tytul']."</td>");
                    echo("</tr>");
                }
        echo("</table>");

    $result=$conn->query("select * from tytul order by id");
        echo("<table style='width:50%'>");
        echo("<caption>");
        echo("<div class='div1'>Tytuły:</div>");
        echo("<div class='zapytanie'>(select * from tytul order by id)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
    
    $result=$conn->query("select * from autor order by id");
        echo("<table style='width:30%;'>");
        echo("<caption>");
        echo("<div class='div1'>Autorzy:</div>");
        echo("<div class='zapytanie'>(select * from autor order by id)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Nazwisko</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
    echo("</div>");
    echo("</div>");
    
?>