<?php include "/app/assets/body.html" ?>
<?php
    require("/app/assets/funkcja.php");

    tabela("SELECT * FROM pracownik", "Wszyscy pracownicy");

    tabela("SELECT * FROM pracownik where (dzial_id=1 or dzial_id=3)","Pracownicy z działu 1 i 3");

    tabela("SELECT * FROM pracownik where (dzial_id=2 or dzial_id=4)","Pracownicy z działu 2 i 4");

?>