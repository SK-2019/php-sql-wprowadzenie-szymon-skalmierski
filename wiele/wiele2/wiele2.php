<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");
require("/app/assets/connect.php");

        // KSIĄŻKI I AUTORZY
    tabdel(
        "select autor_tytul.id as mid,nazwisko,tytul from autor,tytul,autor_tytul where (autor.id=autor_id) and (tytul.id=tytul_id)", 
        "Autorzy i ich dzieła:",
        "delwiele2.php",
        "mid",
        'mid',
        "mtable"
    );

    // INSERT
        echo '<form style="margin: 15px" class="formularz0" action="insertwiele2.php" method="POST">';
            echo '<h2 class="naglowek">Autorzy i tytuły:</h2>';
            echo '<ul>';
            echo '<li>';
            $sql=('select *, autor.id as autorID from autor');
                    $result=$conn->query($sql);               
            echo '<select name="autorid" class="field-style field-full">';
                while($row=$result->fetch_assoc()){
                    echo("<option value='".$row['autorID']."'>".$row['nazwisko']."</option>");
                }
            echo '</select>';
            echo '</li>';
            echo '<li>';
            $sql=('select *, tytul.id as tytulID from tytul');
                    $result=$conn->query($sql);               
            echo '<select name="tytulid" class="field-style field-full">';
                while($row=$result->fetch_assoc()){
                    echo("<option value='".$row['tytulID']."'>".$row['tytul']."</option>");
                }
            echo '</select>';
            echo '</li>';
            echo '<li>';
            echo '<input type="submit" value="Dodaj" />';
            echo '</li>';
            echo '</ul>';
        echo '</form>';

    tabdel(
        "select * from tytul order by id", 
        "Tytuły:",
        "delwiele2.php",
        "tid",
        'id',
        "mtable"
    );

    tabdel(
        "select * from autor order by id", 
        "Autorzy:",
        "delwiele2.php",
        "aid",
        'id',
        "stable"
    );

    echo "<div class='w100'>";
    // INSERT
        echo '<form style="margin: 15px" class="formularz0" action="insertwiele1.php" method="POST">';
            echo '<h2 class="naglowek">Dodawanie tytułu:</h2>';
            echo '<ul>';
            echo '<li>';
                echo '<input type="text" name="tytul" class="field-style field-full" placeholder="Tytuł" />';
            echo '</li>';
            echo '<li>';
                echo '<input type="submit" value="Dodaj" />';
            echo '</li>';
            echo '<li>';
            echo '</li>';
            echo '</ul>';
        echo '</form>';

    // INSERT
        echo '<form style="margin: 15px" class="formularz0" action="insertwiele1.php" method="POST">';
            echo '<h2 class="naglowek">Dodawanie autorów:</h2>';
            echo '<ul>';
            echo '<li>';
                echo '<input type="text" name="nazwisko" class="field-style field-full" placeholder="Nazwisko" />';
            echo '</li>';
            echo '<li>';
                echo '<input type="submit" value="Dodaj" />';
            echo '</li>';
            echo '<li>';
            echo '</li>';
            echo '</ul>';
        echo '</form>';
     echo "</div>";
    echo("</div>");
    echo("</div>");
    
?>