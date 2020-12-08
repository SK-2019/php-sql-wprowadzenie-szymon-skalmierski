<?php
    include "../body.html" 
?>

<?php
    echo("<h2 class='h2strona'>Dodano do bazy:");
    require("../connect.php");
        $sql = "INSERT INTO bAutor(id, autor) VALUES(NULL, '".$_POST['autor']."')";
        echo("<h3 class='h3strona'>Autor: ".$_POST['autor']."</h3>");
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'> Nowy autor został dodany pomyślnie!</p>");
        } else{
            echo("<p class='precord1'> Ten autor istnieje już w bazie danych!</p>");
        }

        $sql = "INSERT INTO bTytul(id, tytul) VALUES(NULL, '".$_POST['tytul']."')";
        echo("<h3 class='h3strona'>Tytuł: ".$_POST['tytul']."</h3>");
        if ($conn->query($sql) === TRUE){
            echo("<p class='precord'> Nowy tytuł został dodany pomyślnie!</p>");
        } else{
            echo("<p class='precord1'> Ten tytuł istnieje już w bazie danych!</p>");
        }

        echo("<form action='inks1.php' method=POST>");
        $sql="Select id as IDautor, autor from bAutor where autor = '".$_POST['autor']."'";
        $result=$conn->query($sql);
        echo("<table class='table2'>");
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
        echo("<table class='table2' style='text-align:left;'>");
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

?>