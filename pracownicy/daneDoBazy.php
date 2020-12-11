<?php include "../body.html" ?>
	<div class='phpp'>
<?php
	require("../connect.php");
	$sql = "select * from pracownicy, organizacja where dzial=id_org order by id_pracownicy";
		$result=$conn->query($sql);
		echo("<table class='tabledel' style='width:47%'>");
		echo("<caption style='text-align:left'>");
		echo("<div class='div1'>Wszyscy pracownicy:</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Dział</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data Urodzenia</th>");
            echo("<th>DELETE</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['data_urodzenia']."</td>");
                    echo("<td><form action='delete.php' method=POST><input type='hidden' name='id' value='".$row['id_pracownicy']."'><input id='delemp1' type='submit' value='X'></form></td>");
                    echo("</tr>");
                }
		echo("</table>");

?>
			<!-- Formularz1 -->
	<form class="formularz1" action="insert.php" method="POST">
        <h2 class="naglowek">Formularz:</h2>
	<ul>
	<li>
		<input type="text" name="imie" class="field-style field-split align-left" placeholder="Imię" />
        <select name="dzial" class="field-style field-split align-right">
        <option value="1">Dział 1 - Serwis</option>
        <option value="2">Dział 2 - Handel</option>
		<option value="3">Dział 3 - Marketing</option>
		<option value="4">Dział 4 - IT</option>
        </select>
	</li>
	<li>
		<input type="text" name="zarobki" class="field-style field-split align-left" placeholder="Zarobki" />
		<input type="date" name="data_ur" class="field-style field-split align-right" min="1940-01-01" max="2020-12-31" />
	</li>
	<li>
	<input type="submit" value="Dodaj" />
	</li>
	</ul>
	</form>

</div>
</div>