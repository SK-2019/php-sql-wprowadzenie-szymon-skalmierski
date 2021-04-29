<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../fundel.php");
require("/app/assets/connect.php");

        // PRACOWNICY I PROJEKTY
    tabdel(
        "select pracownik_projekt.id as mid,imie,nazwaDzial, nazwaProjektu from pracownik,projekt,pracownik_projekt,dzial where (pracownik.id=idPracownik) and (projekt.id=idProjekt) and (dzial_id=dzial.id)", 
        "Pracownicy i projekty:",
        "delwiele5.php",
        "mid",
        "mid",
        "mtable"
    );
   
    tabdel(
        "select pracownik.id as praid,imie,nazwaDzial,wynagrodzenie,dataUrodzenia from pracownik,dzial where dzial_id=dzial.id", 
        "Pracownicy:",
        "delwiele5.php",
        "praid",
        "praid",
        "mtable"
    );
   
    tabdel(
        "select * from projekt", 
        "Projekty:",
        "delwiele5.php",
        "proid",
        "id",
        "stable"
    );
    
    echo("</div>");
    echo("</div>");
?>