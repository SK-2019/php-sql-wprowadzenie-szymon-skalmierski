<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
<body class='bodystrona'>

<?php

    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Dodano do bazy danych:");
        echo("<h3 class='h3strona'>Imię: ".$_POST['imie']);
        echo("<h3 class='h3strona'>Nazwisko: ".$_POST['nazwisko']);
        echo("<h3 class='h3strona'>Klasa: ".$_POST['klasa']);
    echo("<div>");

	require_once("connect.php");
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', NULL, NULL, NULL)";
	$conn->query($sql);
?>

</body>
</head>
</html>