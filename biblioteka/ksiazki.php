<?php include "/app/assets/body.html" ?>
<?php
    function tabelka($sql, $nazwa){
        require("/app/assets/connect.php");
        $result=$conn->query($sql);
        echo("<table class='mtable'>");
        echo("<caption>");
        echo("<div class='div1'>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("<caption>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
            echo("<th>Tytuł</th>");
            echo("<th>Wypożycz</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['AutorID']."</td><td>".$row['Autor']."</td><td>".$row['Tytul']."</td>");
                    echo("<td><form action='inwy1.php' method=POST>");
                        echo("<input type='hidden' name='id' value='".$row['AutorID']."'>");
                        echo("<input type='hidden' name='autor' value='".$row['Autor']."'>");
                        echo("<input type='hidden' name='tytul' value='".$row['Tytul']."'>");
                        echo("<button id='delemp3' type='submit'><i class='fas fa-gavel'></i></button>");
                    echo("</form></td>");
                    echo("</tr>");
                }
        echo("</table>");
    }

    tabelka("select bAutor.id as AutorID, bAutor.autor as Autor, bTytul.tytul as Tytul from bAutor, bTytul, bAutor_bTytul where (bAutorID=bAutor.id) and (bTytulID=bTytul.id) order by AutorID", "Książki i ich autorzy:");
?>
    <form class="formularz2" style='margin-top:100px' action="inks.php" method="POST">
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
    function tabelka1($sql, $nazwa, $thname, $row1){
        require("../assets/connect.php");
        $result=$conn->query($sql);
        echo("<table class='stable''>");
        echo("<caption>");
        echo("<div class='div1'>$nazwa</div>");
        echo("<div class='zapytanie'>($sql)</div>");
        echo("</caption>");
            echo("<th>ID</th>");
            echo("<th>$thname</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row[$row1]."</td>");
                    echo("</tr>");
                }
        echo("</table>");
    }

    tabelka1("select * from bTytul order by id", "Książki:", "Tytuł", 'tytul');

    tabelka1("select * from bAutor order by id", "Autorzy:", "Autor", 'autor');
?>
    </div>
</div>