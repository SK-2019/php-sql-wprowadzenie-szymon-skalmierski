<?php include "../assets/body.html" ?>
    <div class='phpp'>
<?php error_reporting(0); ?>
<?php
    require('../assets/connect.php');
        $sql="select * from bwyp";
        $result=$conn->query($sql);
        echo("<table style='width:70%'>");
        echo("<caption style='text-align:left'>");
        echo("<div class='div1'>Wypożyczone książki:</div>");
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
        
                
        echo '<form class="formularz2" action="wypozyczone.php" method="POST">';
        echo '<h2 class="naglowek">Szukanie książki przez autora:</h2>';
        echo '<ul>';
        echo '<li>';
                $sql=('SELECT autor, id FROM bAutor');
                $result=$conn->query($sql);               
        echo '<select name="autor" class="field-style field-full">';
            while($row=$result->fetch_assoc()){
                echo("<option value='".$row['autor']."'>".$row['autor']."</option>");
            }
        echo '</select>';
        echo '</li>';
        echo '<li>';
        echo '<input type="submit" value="Sprawdź" />';
        echo '</li>';
        echo '</ul>';
        echo '</form>';

        $autor = $_POST['autor'];
        echo '<form class="formularz2" action="inwy.php" method="POST">';
        echo '<h2 class="naglowek">Wypożyczenie książki:</h2>';
        echo '<ul>';
        echo '<li>';
        $sql = "select bTytulID, bTytul.id as tytulID, bAutor.id as AutorID, bAutor.autor as Autor, bTytul.tytul as Tytul from bAutor, bTytul, bAutor_bTytul where (bAutorID=bAutor.id) and (bTytulID=bTytul.id) and (bAutor.autor = '$autor')";
                $result=$conn->query($sql);
        echo '<select name="tytul" class="field-style field-full">';
            while($row=$result->fetch_assoc()){
                echo("<option value='".$row['Tytul']."'>".$row['Tytul']."</option>");
            }
        echo("</select>");
        echo '<select hidden name="autorid" class="field-style field-full">';
                echo("<option value='$autor'></option>");
        echo("</select>");
        echo '</li>';
        echo '<li>';
        echo '<input type="submit" value="Wypożycz" />';
        echo '</li>';
        echo '</ul>';
        echo '</form>';
?>
    </div>
</div>




