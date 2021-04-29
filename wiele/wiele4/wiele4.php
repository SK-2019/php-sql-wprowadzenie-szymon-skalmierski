<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");

        // NAUCZYCIELE I KLASY
        tabdel(
            "select nauczyciel_klasa.id as mid, nauczyciel, klasa from nauczyciel,klasa,nauczyciel_klasa where (nauczyciel.id=IDnauczyciel) and (klasa.id=IDklasa)", 
            "Nauczyciele i ich klasy:",
            "delwiele4.php",
            "mid",
            'mid',
            "mtable"
        );

        tabdel(
            "select * from nauczyciel", 
            "Nauczyciele:",
            "delwiele4.php",
            "nid",
            'id',
            "mtable"
        );

        tabdel(
            "select * from klasa", 
            "Klasy:",
            "delwiele4.php",
            "kid",
            'id',
            "stable"
        );
        
        echo("</div>");
        echo("</div>");
?>