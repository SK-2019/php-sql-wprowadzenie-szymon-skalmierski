<?php
    require("../assets/connect.php");
    echo $_POST['autorid'];
        $sql = "INSERT INTO bwyp(id, autor, tytul, datawy) VALUES(NULL, '".$_POST['autorid']."', '".$_POST['tytul']."', CURDATE())";
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'> Książka została dodana do wypożyczonych!</p>");
        } else{
            echo("<p class='precord1'> Książka jest już wypożyczona!</p>");
        }

    header("location:wypozyczone.php");
    // header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>