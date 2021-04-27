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
        tabelka("Select *, id as osobaID from osoba where (imie='".$_POST['imie']."') and (nazwisko='".$_POST['nazwisko']."')","Dodana osoba:");

        tabelka("Select *, id as rolaID from rola where (nazwaRoli='".$_POST['rola']."')","Dodana Rola:");

        echo("<input id='click' type='submit'>");
        echo("</form>");
        
    header("location:insertwiele1.php");
?>