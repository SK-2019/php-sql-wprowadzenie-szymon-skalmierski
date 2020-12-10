<?php include "../body.html" ?>
    <div class='phpp'>
<?php
        require('../connect.php');
    $sql="select * from bwyp";
    $result=$conn->query($sql);
    echo("<table class='tabledel' style='width:70%'>");
    echo("<caption style='text-align:left'>");
    echo("<div>Wypożyczone książki:</div>");
    echo("</caption>");
        echo("<th>ID</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytul</th>");
        echo("<th>Wypożyczenie</th>");
        echo("<th>USUŃ</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td><td>".$row["datawy"]."</td>");
                    echo("<td><form action='delwy.php' method=POST>");
                    echo("<input type='hidden' name='id' value='".$row['id']."'>");
                    echo("<input type='hidden' name='autor' value='".$row['autor']."'>");
                    echo("<input type='hidden' name='tytul' value='".$row['tytul']."'>");
                    echo("<input type='hidden' name='datawy' value='".$row['datawy']."'>");
                    echo("<input id='delemp1' type='submit' value='X'>");
                    echo("</form></td>");
                echo("</tr>");
            }
    echo("</table>");

    echo '<form class="formularz2" action="inwy.php" method="POST">';
    echo '<h2 class="naglowek">Wypożyczenie książki:</h2>';
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
            $sql=('SELECT * FROM bTytul');
            $result=$conn->query($sql);
    echo '<select name="tytul" class="field-style field-full">';
        while($row=$result->fetch_assoc()){
            echo("<option value='".$row['tytul']."'>".$row['tytul']."</option>");
        }
    echo("</select>");
    echo '</li>';
    echo '<li>';
    echo '<input type="submit" value="Dodaj" />';
    echo '</li>';
    echo '</ul>';
    echo '</form>';


?>
    </div>
</div>





