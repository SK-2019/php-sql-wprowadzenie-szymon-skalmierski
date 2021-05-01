<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");
require("../funin.php");

        // NAUCZYCIELE I KLASY
        tabdel(
            "select nauczyciel_klasa.id as mid, nauczyciel, klasa from nauczyciel,klasa,nauczyciel_klasa where (nauczyciel.id=IDnauczyciel) and (klasa.id=IDklasa)", 
            "Nauczyciele i ich klasy:",
            "delwiele4.php",
            "mid",
            'mid',
            "mtable"
        );

        // INSERT - LEKARZE I PACJENCI
        minform(
            "insertwiele4.php",
            "Nauczyciele i klasy:",
            "select *, nauczyciel.id as nauczycielID from nauczyciel",
            "nauczycielID",
            "nauczyciel",
            "select *, klasa.id as klasaID from klasa",
            "klasaID",
            "klasa",
        );

        // NAUCZYCIELE
        tabdel(
            "select * from nauczyciel", 
            "Nauczyciele:",
            "delwiele4.php",
            "nid",
            'id',
            "mtable"
        );

        // KLASY
        tabdel(
            "select * from klasa", 
            "Klasy:",
            "delwiele4.php",
            "kid",
            'id',
            "stable"
        );
        
        // INSERT - NAUCZYCIELE    |    INSERT - KLASY
        echo "<div class='w100'>";
            inform(
                "insertwiele4.php",
                "Dodawanie nauczyciela:",
                "nauczyciel",
                "Nauczyciel"
            );

            inform(
                "insertwiele4.php",
                "Dodawanie klasy:",
                "klasa",
                "Klasa"
            );
        echo "</div>";
        
echo("</div>");
echo("</div>");
?>