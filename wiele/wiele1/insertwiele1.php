<head>
<script type="text/javascript">
window.onload = function(){
  document.getElementById('clickButton').click();
}
</script>
</head>
<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


    if(!empty($_POST['imie']) && (!empty($_POST['nazwisko'])
    {
        $sql = "INSERT INTO osoba(id, imie, nazwisko) VALUES(NULL, '".$_POST['imie']."', '".$_POST['nazwisko']."')";
        $conn->query($sql);
    }

    if(!empty($_POST['rola']))
    {
        $sql = "INSERT INTO rola(id, nazwaRoli) VALUES(NULL, '".$_POST['rola']."')";
        $conn->query($sql);
    }


        echo("<form style='display:none' action='inwiele1.php' method=POST>");
        $sql="Select * from osoba where (imie='".$_POST['imie']."') and (nazwisko='".$_POST['nazwisko']."')";
        $result=$conn->query($sql);
        echo("<table>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Nazwisko</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["imie"]."</td><td>".$row["nazwisko"]."</td>");
                        echo("<input type='hidden' name='osobaID' value='".$row['id']."'>");
                    echo("</tr>");
                }
        echo("</table>");
        echo '<br>';

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
        echo '<br>';
        echo("<div class='submit2'>");
        echo("<input id='clickButton' type='submit' value='MERGE DATA'>");
        echo("</div>");
        echo("</form>");
?>