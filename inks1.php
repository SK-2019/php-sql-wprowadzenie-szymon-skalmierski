<?php
require("connect.php");
echo("<h3 class='h3strona'>Autor: ".$_POST['IDautor']."</h3>");
echo("<h3 class='h3strona'>Tytul: ".$_POST['IDtytul']."</h3>");

    $IDautor = $_POST['IDautor'];
    $IDtytul = $_POST['IDtytul'];
        $sql= "INSERT INTO bAutor_bTytul (bAutorID, bTytulID) VALUES('$IDautor','$IDtytul')";
        $conn->query($sql);

    header("location:ksiazki.php");   
?>
