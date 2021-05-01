<?php include "/app/assets/body.html" ?>
<?php
    require("/app/assets/connect.php");

    
    if(!empty($_POST['lekarzid']))
    {
        $sql = "INSERT INTO lekarz_pacjent(id, idLekarz, idPacjent) VALUES(NULL, '".$_POST['lekarzid']."', '".$_POST['pacjentid']."')";
        $conn->query($sql);
        header("location:wiele3.php"); 
    }

    if(!empty($_POST['lekarz']))
    {
        $sql = "INSERT INTO lekarz(id, lekarz) VALUES(NULL, '".$_POST['lekarz']."')";
        $conn->query($sql);
        header("location:wiele3.php"); 
    }

    if(!empty($_POST['pacjent']))
    {
        $sql = "INSERT INTO pacjent(id, pacjent) VALUES(NULL, '".$_POST['pacjent']."')";
        $conn->query($sql);
        header("location:wiele3.php");  
    }

?>