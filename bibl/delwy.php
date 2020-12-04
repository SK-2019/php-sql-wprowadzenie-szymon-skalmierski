<?php
    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Usunięto z bazy:");
        echo("<h3 class='h3strona'>ID: ".$_POST['id']."</h3>");

	require_once("../connect.php");
	$sql = "DELETE FROM bwyp WHERE id='".$_POST['id']."'";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  Record deleted successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
    echo("</div>");  
    
    header("location:https://git-website-com.herokuapp.com/bibl/inwy.php");
?>