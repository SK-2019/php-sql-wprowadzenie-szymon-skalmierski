<?php include "../body.html" ?>
<?php
    echo("<hr>");
    function tabelka4($sql, $nazwa){
        require("../connect.php");
        $result=$conn->query($sql);
        echo("<div>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("<table class='tabledel'>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data Urodzenia</th>");
            echo("<th>DELETE</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
                    echo("<td><form action='delete.php' method=POST>");
                    echo("<input type='hidden' name='id' value='".$row['id_pracownicy']."'><input id='delemp1' type='submit' value='X'>");
                    echo("</form></td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
    }
    tabelka4("select * from pracownicy, organizacja where dzial=id_org order by id_pracownicy", "Wszyscy pracownicy:");
?>

