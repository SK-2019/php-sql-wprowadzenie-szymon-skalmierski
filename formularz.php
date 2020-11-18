<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
<body>

<?php
	echo('<form class="formularz1" action="strona.php" method="POST">');
        echo('<h2 class="naglowek">Formularz:</h2>');
	echo("<ul>");
	echo("<li>");
		echo('<input type="text" name="imie" class="field-style field-split align-left" placeholder="Imię" />');
		echo('<input type="text" name="nazwisko" class="field-style field-split align-right" placeholder="Nazwisko" />');
	echo('</li>');
	echo('<li>');
		echo('<input type="text" name="klasa" class="field-style field-full align-none" placeholder="Klasa" />');
	echo('</li>');
	echo('<li>');
	echo('<input type="submit" value="Wyślij" />');
	echo('</li>');
	echo('</ul>');
	echo('</form>');

	require("connect.php");
	$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`) VALUES (NULL,'".$_POST['imie']."')";
	$conn->query($sql);
?>
</body>
</head>
</html>