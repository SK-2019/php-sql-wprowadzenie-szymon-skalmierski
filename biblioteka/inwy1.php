<?php
    echo("<h2 class='h2strona'>Dodano do bazy:");
    require("../assets/connect.php");
        $sql = "INSERT INTO bwyp(id, autor, tytul, datawy) VALUES(NULL, '".$_POST['autor']."', '".$_POST['tytul']."', CURDATE())";
        echo("<h3 class='h3strona'>Książka: ".$_POST['tytul']."</h3>");
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'> Książka została dodana do wypożyczonych!</p>");
        } else{
            echo("<p class='precord1'> Książka jest już wypożyczona!</p>");
        }

    header("location:ksiazki.php");
    // header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>