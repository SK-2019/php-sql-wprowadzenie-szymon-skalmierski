<?php include "/app/assets/body.html" ?>
<?php
require("../functiondel.php");

        // KSIĄŻKI I AUTORZY
    echo("<div class='wiele1'>");
    require("/app/assets/connect.php");
    $sql='select *, autor_tytul.id as mid from autor,tytul,autor_tytul where (autor.id=autor_id) and (tytul.id=tytul_id)';
    $result=$conn->query($sql);
        echo("<table class='mtable'>");
        echo("<caption>");
        echo("<div class='div1'>Autorzy i ich dzieła:</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Nazwisko</th>");
            echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['mid']."</td><td>".$row['nazwisko']."</td><td>".$row['tytul']."</td>");
                    del("<input type='hidden' name=mid value='".$row['mid']."'>", "delwiele2.php");
                    echo("</tr>");
                }
        echo("</table>");

    $sql="select * from tytul order by id";
    $result=$conn->query($sql);
        echo("<table class='mtable'>");
        echo("<caption>");
        echo("<div class='div1'>Tytuły:</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
                    del("<input type='hidden' name=tid value='".$row['id']."'>", "delwiele2.php");
                    echo("</tr>");
                }
        echo("</table>");
    
    $sql="select * from autor order by id";
    $result=$conn->query($sql);
        echo("<table class='stable'>");
        echo("<caption>");
        echo("<div class='div1'>Autorzy:</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Nazwisko</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td>");
                    del("<input type='hidden' name=aid value='".$row['id']."'>", "delwiele2.php");
                    echo("</tr>");
                }
        echo("</table>");
    echo("</div>");
    echo("</div>");
    
?>