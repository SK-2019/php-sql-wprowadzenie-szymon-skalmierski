<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");

        // KSIĄŻKI I AUTORZY
    tabdel(
        "select *, autor_tytul.id as mid from autor,tytul,autor_tytul where (autor.id=autor_id) and (tytul.id=tytul_id)", 
        "Autorzy i ich dzieła:",
        "delwiele2.php",
        "mid",
        'mid',
        "mtable"
    );

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

    echo("</div>");
    echo("</div>");
    
?>