    <script>
        $(document).ready(function(){
            $('#click').trigger('click');
        });
    </script>
<?php include "/app/assets/body.html" ?>
<?php
    require("/app/assets/funkcja.php");
    require("/app/assets/connect.php");
        $sql = "INSERT INTO osoba(id, imie, nazwisko) VALUES(NULL, '".$_POST['imie']."', '".$_POST['nazwisko']."')";
        echo("<h3 class='h3strona'>Autor: ".$_POST['autor']."</h3>");
        echo("<br>");
        $conn->query($sql);

        $sql = "INSERT INTO rola(id, nazwaRoli) VALUES(NULL, '".$_POST['rola']."')";
        echo("<h3 class='h3strona'>Tytuł: ".$_POST['tytul']."</h3>");
        echo("<br>");
        $conn->query($sql);


        echo("<form action='inwiele1.php' method=POST>");
        $sql="Select * from osoba where (imie='".$_POST['imie']."') and (nazwisko='".$_POST['nazwisko']."')";
        $result=$conn->query($sql);
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Autor</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["imie"]."</td><td>".$row["nazwisko"]."</td>");
                        echo("<input type='hidden' name='osobaID' value='".$row['id']."'>");
                    echo("</tr>");
                }
        echo("</table>");

        $sql="Select * from rola where (nazwaRoli='".$_POST['rola']."')";
        $result=$conn->query($sql);
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Rola</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row["nazwaRoli"]."</td>");
                        echo("<input type='hidden' name='rolaID' value='".$row['id']."'>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<div class='submit2'>");
        echo("<input id='click' type='submit' value='MERGE DATA'>");
        echo("</div>");
        echo("</form>");
?>