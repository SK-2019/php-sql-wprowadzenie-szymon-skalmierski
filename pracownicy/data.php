<?php include "/app/assets/body.html" ?>
<?php
  function tabelka1($zapytanie, $nazwa, $kolumna){
        require("/app/assets/connect.php");
        $result=$conn->query($zapytanie);
        echo("<table class='mtable'>");
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
        require("/app/assets/connect.php");
	    $sql="select id_pracownicy, imie, nazwa_dzial, zarobki, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where id_org=dzial";
        $result=$conn->query($sql);
        echo("<table class='mtable'>");
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