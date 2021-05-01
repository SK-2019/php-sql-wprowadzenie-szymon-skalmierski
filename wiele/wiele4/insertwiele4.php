<?php include "/app/assets/body.html" ?>
<?php
    require("/app/assets/connect.php");

    if(!empty($_POST['nauczycielID']))
    {
        $sql = "INSERT INTO nauczyciel_pacjent(id, IDnauczyciel, IDklasa) VALUES(NULL, '".$_POST['nauczycielID']."', '".$_POST['klasaID']."')";
        $conn->query($sql);
        header("location:wiele4.php"); 
    }

    if(!empty($_POST['nauczyciel']))
    {
        $sql = "INSERT INTO nauczyciel(id, nauczyciel) VALUES(NULL, '".$_POST['nauczyciel']."')";
        $conn->query($sql);
        header("location:wiele4.php"); 
    }

    if(!empty($_POST['klasa']))
    {
        $sql = "INSERT INTO klasa(id, klasa) VALUES(NULL, '".$_POST['klasa']."')";
        $conn->query($sql);
        header("location:wiele4.php");  
    }

?>