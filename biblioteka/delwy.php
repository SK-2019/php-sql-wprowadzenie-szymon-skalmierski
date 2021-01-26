<?php
    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Usunięto z bazy:");
        echo("<h3 class='h3strona'>ID: '".$_POST['id']."'</h3>");
        echo("<h3 class='h3strona'>Autor: '".$_POST['autor']."'</h3>");
        echo("<h3 class='h3strona'>Tytul: '".$_POST['tytul']."'</h3>");
        echo("<h3 class='h3strona'>Datawy: '".$_POST['datawy']."'</h3>");

	require("../assets/connect.php");
	$sql = "DELETE FROM bwyp WHERE id='".$_POST['id']."'";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  Record deleted successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
    echo("</div>");  

  $sql = "INSERT INTO bodd(id, autor, tytul, datawy, datazw) values(NULL, '".$_POST['autor']."', '".$_POST['tytul']."', '".$_POST['datawy']."', CURDATE())";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  Record deleted successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
    echo("</div>"); 
    
    header("location:wypozyczone.php");
?>