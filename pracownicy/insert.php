<?php include "../body.html" ?>
<?php
    echo("<div id='okno1'>");
    echo("<h2 class='h2strona'>Dodano do bazy:");
    echo("<h3 class='h3strona'>Imię: ".$_POST['imie']."</h3>");
    echo("<h3 class='h3strona'>Dział: ".$_POST['dzial']."</h3>");
    echo("<h3 class='h3strona'>Zarobki: ".$_POST['zarobki']."</h3>");
    echo("<h3 class='h3strona'>Data urodzenia: ".$_POST['data_ur']."</h3>");

	require_once("../connect.php");
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."')";
	if ($conn->query($sql) === TRUE){
        echo("<p class='precord'>  New record created successfully!</p>");
      } else{
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      } 
    echo("</div>"); 

    header("location:https://git-website-com.herokuapp.com/pracownicy/daneDoBazy.php");
    // header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>
