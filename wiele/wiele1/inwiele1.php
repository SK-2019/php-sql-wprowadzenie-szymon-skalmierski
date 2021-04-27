<?php
require("/app/assets/connect.php");
echo("<h3 class='h3strona'>Autor: ".$_POST['osobaID']."</h3>");
echo("<h3 class='h3strona'>Tytul: ".$_POST['rolaID']."</h3>");

    $IDosoba = $_POST['osobaID'];
    $IDrola = $_POST['rolaID'];
        $sql= "INSERT INTO osoba_rola (idOsoba, idRola) VALUES('$IDosoba','$IDrola')";
        $conn->query($sql);

    header("location:wiele1.php");
?>