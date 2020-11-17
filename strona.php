<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
<body class='bodystrona'>

<?php

echo("<div id='okno1'>");
	echo("<h2 class='h2strona'>Formularz:");
	echo("<h3 class='h3strona'>Imie: ".$_POST['imie']);
	echo("<h3 class='h3strona'>Nazwisko: ".$_POST['nazwisko']);
	echo("<h3 class='h3strona'>Klasa: ".$_POST['klasa']);
echo("<div>");

?>

</body>
</head>
</html>