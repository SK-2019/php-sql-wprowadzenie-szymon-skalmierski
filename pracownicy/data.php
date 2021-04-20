<?php include "/app/assets/body.html" ?>
    <div class='phpp'>
<?php
  function tabelka1($zapytanie, $nazwa, $kolumna){
        require("/app/assets/connect.php");
        $result=$conn->query($zapytanie);
        echo("<table style='margin-right:50px; width:60%'>");
        echo("<caption>");
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("</caption>");
        echo("<th>ID</th>");
	    echo("<th>Imie</th>");
	    echo("<th>Dział</th>");
	    echo("<th>Zarobki</th>");
	    echo("<th>$kolumna</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['wiek']."</td>");
                    echo("</tr>");
		}
        echo("</table>");
     }

	tabelka1("select id_pracownicy, imie, nazwa_dzial, zarobki, date_format(data_urodzenia,'%W-%m-%Y') as wiek from pracownicy, organizacja where id_org=dzial", "Wyświetlanie nazwy dni w dacie urodzenia:", "Data urodzenia");
?>
<?php
        require("../assets/connect.php");
	    $sql="select id_pracownicy, imie, nazwa_dzial, zarobki, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where id_org=dzial";
        $result=$conn->query($sql);
        echo("<table style='width:60%'>");
        echo("<caption>");
        echo("<div class='div1'>Pracownicy + wiek:</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("</caption>");
        echo("<th>ID</th>");
	    echo("<th>Imie</th>");
	    echo("<th>Dział</th>");
	    echo("<th>Zarobki</th>");
	    echo("<th>Wiek</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['wiek']."</td>");
                    echo("</tr>");
		}
        echo("</table>");
?>
    </div>
</div>