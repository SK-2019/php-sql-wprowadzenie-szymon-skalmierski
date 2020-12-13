<?php error_reporting(0); ?>
<?php include "../body.html" ?>
<?php
    function tabelka($sql, $nazwa){
        require("../connect.php");
        $result=$conn->query($sql);
        echo("<table style='display:block; margin:auto; width:70%' class='table1'>");
        echo("<caption>");
        echo("<div class='div1'>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
            echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['AutorID']."</td><td>".$row['Autor']."</td><td>".$row['Tytul']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
    }

    tabelka("select bAutor.id as AutorID, bAutor.autor as Autor, bTytul.tytul as Tytul from bAutor, bTytul, bAutor_bTytul where (bAutorID=bAutor.id) and (bTytulID=bTytul.id) and bAutor.autor='".$_POST['autor']."' order by AutorID", "Książki i ich autorzy:");

    require("../connect.php");
    echo '<form style="margin:auto" class="formularz2" action="autorzy1.php" method="POST">';
    echo '<h2 class="naglowek">Filtrowanie wg autora:</h2>';
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
    echo '<input type="submit" value="Szukaj" />';
    echo '</li>';
    echo '</ul>';
    echo '</form>';
?>