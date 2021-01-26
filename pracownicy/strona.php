<?php include "/assets/body.html" ?>
    <div class='phpp'>
<?php
    echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Wynik:");
        echo("<h3 class='h3strona'>Imię: ".$_POST['imie']."</h3>");
        echo("<h3 class='h3strona'>Dział: ".$_POST['dzial']."</h3>");
        echo("<h3 class='h3strona'>Zarobki: ".$_POST['zarobki']."</h3>");
        echo("<h3 class='h3strona'>Data urodzenia: ".$_POST['data_ur']."</h3>");
    echo("<div>");
?>
    </div>
</div>