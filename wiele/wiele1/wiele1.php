<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");

        // OSOBY I ROLE
        tabdel(
            "select osoba_rola.id as mid,imie,nazwisko,nazwaRoli from osoba,rola,osoba_rola where (osoba.id=idOsoba) and (rola.id=idRola) order by osoba_rola.id", 
            "Osoby i role:",
            "delwiele1.php",
            "mid",
            'mid',
            "mtable"
        );
    
         // INSERT
        echo '<form style="margin: 15px" class="formularz0" action="insertwiele1.php" method="POST">';
            echo '<h2 class="naglowek">Dodawanie osoby i roli:</h2>';
            echo '<ul>';
            echo '<li>';
                echo '<input type="text" name="imie" class="field-style field-split align-left" placeholder="Imię" />';
                echo '<input type="text" name="nazwisko" class="field-style field-split align-left" placeholder="Nazwisko" />';
            echo '</li>';
            echo '<li>';
            echo '<input type="text" name="rola" class="field-style field-full" placeholder="Rola" />';
            echo '</li>';
            echo '<li>';
            echo '<input type="submit" value="Dodaj" />';
            echo '</li>';
            echo '</ul>';
        echo '</form>';

        tabdel(
            "select * from osoba order by id", 
            "Osoby:",
            "delwiele1.php",
            "oid",
            'id',
            "mtable"
        );
    
        tabdel(
            "select * from rola order by id", 
            "Role:",
            "delwiele1.php",
            "rid",
            'id',
            "stable"
        );

        echo("</div>");
        echo("</div>");


?>