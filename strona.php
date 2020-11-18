<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
<body class='bodystrona'>

<?php

    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Dodano do bazy:");
        echo("<h3 class='h3strona'>Imię: ".$_POST['imie']."</h3>");
        echo("<h3 class='h3strona'>Nazwisko: ".$_POST['dzial']."</h3>");
        echo("<h3 class='h3strona'>Nazwisko: ".$_POST['zarobki']."</h3>");
        echo("<h3 class='h3strona'>Nazwisko: ".$_POST['data_ur']."</h3>");
    echo("<div>");

	require_once("connect.php");
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."')";
	if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>

</body>
</head>
</html>