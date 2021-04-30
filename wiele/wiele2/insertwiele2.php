<?php include "/app/assets/body.html" ?>
<?php
    require("/app/assets/connect.php");
      
    
    if(!empty($_POST['tytulid']))
    {
        $sql = "INSERT INTO autor_tytul(id, autor_id, tytul_id) VALUES(NULL, '".$_POST['autorid']."', '".$_POST['tytulid']."')";
        $conn->query($sql);
        header("location:wiele2.php"); 
    }

    if(!empty($_POST['nazwisko']))
    {
        $sql = "INSERT INTO autor(id, nazwisko) VALUES(NULL, '".$_POST['nazwisko']."')";
        $conn->query($sql);
        header("location:wiele2.php"); 
    }

    if(!empty($_POST['tytul']))
    {
        $sql = "INSERT INTO tytul(id, tytul) VALUES(NULL, '".$_POST['tytul']."')";
        $conn->query($sql);
        header("location:wiele2.php");  
    }

?>