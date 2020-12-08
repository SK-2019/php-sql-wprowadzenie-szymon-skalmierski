<?php 
    include "../body.html"
?>

<form class="formularz2" action="inks.php" style='left:150; right:-150' method="POST">
        <h2 class="naglowek">Dodawanie nowej książki:</h2>
	<ul>
	<li>
		<input type="text" name="autor" class="field-style field-full" placeholder="Autor"/>
	</li>
	<li>
		<input type="text" name="tytul" class="field-style field-full" placeholder="Tytuł" />
	</li>
	<li>
	<input type="submit" value="Dodaj" />
	</li>
	</ul>
    </form>
    
<?php
    function tabelka($sql, $nazwa){
        require("../connect.php");
        $result=$conn->query($sql);
        echo("<div>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("<table class='table1'>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
            echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['AutorID']."</td><td>".$row['Autor']."</td><td>".$row['Tytul']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
    }

    tabelka("select bAutor.id as AutorID, bAutor.autor as Autor, bTytul.tytul as Tytul from bAutor, bTytul, bAutor_bTytul where (bAutorID=bAutor.id) and (bTytulID=bTytul.id) order by AutorID", "Książki i ich autorzy:");

    function tabelka1($sql, $nazwa, $thname, $row1){
        require("../connect.php");
        $result=$conn->query($sql);
        echo("<div>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("<table style='width:25%'>");
            echo("<th>ID</th>");
            echo("<th>$thname</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row[$row1]."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
    }
    
    tabelka1("select * from bAutor order by id", "Autorzy:", "Autor", 'autor');

    tabelka1("select * from bTytul order by id", "Książki:", "Tytuł", 'tytul');


?>