<?php include "/body.html" ?>
<?php
    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Usunięto z bazy:");
        echo("<h3 class='h3strona'>ID: ".$_POST['id']."</h3>");

	require_once("../connect.php");
	$sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  Record deleted successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
    echo("</div>");  
    
    header("location:https://git-website-com.herokuapp.com/pracownicy/daneDoBazy.php");
	// header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>