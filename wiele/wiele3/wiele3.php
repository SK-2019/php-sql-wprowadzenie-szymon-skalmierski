<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");

        // LEKARZE I PACJENCI
        tabdel(
            "select lekarz_pacjent.id as mid,lekarz,pacjent from lekarz,pacjent,lekarz_pacjent where (lekarz.id=idLekarz) and (pacjent.id=idPacjent)", 
            "Lekarze i ich pacjenci:",
            "delwiele3.php",
            "mid",
            'mid',
            "mtable"
        );

        tabdel(
            "select * from lekarz", 
            "Lekarze:",
            "delwiele3.php",
            "lid",
            'id',
            "mtable"
        );

        tabdel(
            "select * from pacjent", 
            "Pacjenci:",
            "delwiele3.php",
            "pid",
            'id',
            "stable"
        );
        
        echo("</div>");
        echo("</div>");
?>