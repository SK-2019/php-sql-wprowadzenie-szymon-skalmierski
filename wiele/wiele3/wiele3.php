<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../fundel.php");
require("../funin.php");

        // LEKARZE I PACJENCI
        tabdel(
            "select lekarz_pacjent.id as mid,lekarz,pacjent from lekarz,pacjent,lekarz_pacjent where (lekarz.id=idLekarz) and (pacjent.id=idPacjent)", 
            "Lekarze i ich pacjenci:",
            "delwiele3.php",
            "mid",
            'mid',
            "mtable"
        );

        // INSERT - LEKARZE I PACJENCI
        minform(
            "insertwiele3.php",
            "Lekarze i pacjenci:",
            "select *, lekarz.id as lekarzID from lekarz",
            "lekarzid",
            "lekarzID",
            "lekarz",
            "select *, pacjent.id as pacjentID from pacjent",
            "pacjentid",
            "pacjentID",
            "pacjent",
        );

        // LEKARZE
        tabdel(
            "select * from lekarz", 
            "Lekarze:",
            "delwiele3.php",
            "lid",
            'id',
            "mtable"
        );

        // PACJENCI
        tabdel(
            "select * from pacjent", 
            "Pacjenci:",
            "delwiele3.php",
            "pid",
            'id',
            "stable"
        );

        
        // INSERT - LEKARZE    |    INSERT - PACJENCI
        echo "<div class='w100'>";
            inform(
                "insertwiele3.php",
                "Dodawanie lekarza:",
                "lekarz",
                "Lekarz"
            );

            inform(
                "insertwiele3.php",
                "Dodawanie pacjenta:",
                "pacjent",
                "Pacjent"
            );
        echo "</div>";

echo("</div>");
echo("</div>");
?>