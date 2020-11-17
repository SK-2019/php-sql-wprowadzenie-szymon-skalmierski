<html>
<head>
    <title>Szymon Skalmierski 2Ti</title>
	<link rel="icon" href="https://image.flaticon.com/icons/png/512/25/25231.png">
	<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
<body class='bodystrona'>

<?php

    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Formularz:");
        echo("<h3 class='h3strona'>Imię: ".$_POST['imie']);
        echo("<h3 class='h3strona'>Nazwisko: ".$_POST['nazwisko']);
        echo("<h3 class='h3strona'>Klasa: ".$_POST['klasa']);
    echo("<div>");

?>

</body>
</head>
</html>