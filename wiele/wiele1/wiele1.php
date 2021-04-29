<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../functiondel.php");

        // OSOBY I ROLE
        echo("<div class='wiele1'>");
        require("/app/assets/connect.php");
        $sql= "select *, osoba_rola.id as mid from osoba,rola,osoba_rola where (osoba.id=idOsoba) and (rola.id=idRola) order by osoba_rola.id";
        $result=$conn->query($sql);
            echo("<table class='mtable'>");
            echo("<caption>");
            echo("<div class='div1'>Osoby i role:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Imie</th>");
                echo("<th>Nazwisko</th>");
                echo("<th>Rola</th>");
                echo("<th>DELETE</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['mid']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['nazwaRoli']."</td>");
                        del("<input type='hidden' name=mid value='".$row['mid']."'>", "delwiele1.php");
                        echo("</tr>");
                    }
            echo("</table>");

      // INSERT
      echo '<form style="margin: 15px" class="formularz0" action="insertwiele1.php" method="POST">';
      echo '<h2 class="naglowek">Dodawanie osoby i roli:</h2>';
      echo '<ul>';
      echo '<li>';
          echo '<input type="text" name="imie" class="field-style field-split align-left" placeholder="Imię" />';
          echo '<input type="text" name="nazwisko" class="field-style field-split align-left" placeholder="Nazwisko" />';
      echo '</li>';
      echo '<li>';
      echo '<input type="text" name="rola" class="field-style field-full" placeholder="Rola" />';
      echo '</li>';
      echo '<li>';
      echo '<input type="submit" value="Dodaj" />';
      echo '</li>';
      echo '</ul>';
      echo '</form>';


        $sql="select * from osoba";
        $result=$conn->query($sql);
            echo("<table class='mtable'>");
            echo("<caption>");
            echo("<div class='div1'>Osoby:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Imie</th>");
                echo("<th>Nazwisko</th>");
                echo("<th>DELETE</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");
                        del("<input type='hidden' name=oid value='".$row['id']."'>", "delwiele1.php");
                        echo("</tr>");
                    }
            echo("</table>");
        
        $sql="select * from rola";
        $result=$conn->query($sql);
            echo("<table class='stable'>");
            echo("<caption>");
            echo("<div class='div1'>Role:</div>");
            echo("<div class='zapytanie'>($sql)</div>");
            echo("</caption>");
                echo("<th>ID</th>");
                echo("<th>Rola</th>");
                echo("<th>DELETE</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$row['id']."</td><td>".$row['nazwaRoli']."</td>");
                        del("<input type='hidden' name=rid value='".$row['id']."'>", "delwiele1.php");
                        echo("</tr>");
                    }
            echo("</table>");
        echo("</div>");
        echo("</div>");
?>