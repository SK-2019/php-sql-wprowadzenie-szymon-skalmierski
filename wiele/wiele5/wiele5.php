<?php include "/app/assets/body.html" ?>
<?php
require("../fundel.php");
require("/app/assets/connect.php");

        // PRACOWNICY I PROJEKTY
    tabdel("select pracownik_projekt.id as mid,imie,nazwaDzial, nazwaProjektu from pracownik,projekt,pracownik_projekt,dzial where (pracownik.id=idPracownik) and (projekt.id=idProjekt) and (dzial_id=dzial.id)", "Pracownicy i projekty:","delwiele5.php","mid","mid","mtable");
   
    tabdel("select *,pracownik.id as procownikID from pracownik,dzial where dzial_id=dzial.id", "Pracownicy:","delwiele5.php","procownikID","praid","stable");
   
    tabdel("select * from projekt", "Projekty:","delwiele5.php","id","proid","stable");
    
    echo("</div>");
    echo("</div>");
?>