<?php include "/assets/body.html" ?>
    <div class='phpp' style='display:block'>
<?php
    echo("<div class='div1'>Dodano do bazy: </div>");
    require("/assets/connect.php");
        $sql = "INSERT INTO bAutor(id, autor) VALUES(NULL, '".$_POST['autor']."')";
        echo("<h3 class='h3strona'>Autor: ".$_POST['autor']."</h3>");
        echo("<br>");
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'> Nowy autor został dodany pomyślnie!</p>");
        } else{
            echo("<p class='precord1'> Ten autor istnieje już w bazie danych!</p>");
        }

        $sql = "INSERT INTO bTytul(id, tytul) VALUES(NULL, '".$_POST['tytul']."')";
        echo("<h3 class='h3strona'>Tytuł: ".$_POST['tytul']."</h3>");
        echo("<br>");
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'> Nowy tytuł został dodany pomyślnie!</p>");
        } else{
            echo("<p class='precord1'> Ten tytuł istnieje już w bazie danych!</p>");
        }

        echo("<form action='inks1.php' method=POST>");
        $sql="Select id as IDautor, autor from bAutor where autor = '".$_POST['autor']."'";
        $result=$conn->query($sql);
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["IDautor"]."</td><td>".$row["autor"]."</td>");
                        echo("<input type='hidden' name='IDautor' value='".$row['IDautor']."'>");
                    echo("</tr>");
                }
        echo("</table>");

        $sql="Select id as IDtytul, tytul from bTytul where tytul = '".$_POST['tytul']."'";
        $result=$conn->query($sql);
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Tytul</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['IDtytul']."</td><td>".$row["tytul"]."</td>");
                        echo("<input type='hidden' name='IDtytul' value='".$row['IDtytul']."'>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<div class='submit2'>");
        echo("<input id='delemp2' type='submit' value='MERGE DATA'>");
        echo("</div>");
        echo("</form>");

    // header("location:ksiazki.php");
    // header('Refresh: 5; url=https://git-website-com.herokuapp.com/pracownicy.php');
	// echo("<div class='redeem1'>Zostaniesz przekierowany na stronę pracowników w ciągu 5 sekund!</div>");  
?>
    </div>
</div>