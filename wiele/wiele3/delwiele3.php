<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("/app/assets/connect.php");

    if(!empty($_POST['mid']))
    {
        $sql = "DELETE FROM lekarz_pacjent WHERE id='".$_POST['mid']."'";
        $conn->query($sql); 
        header("location:wiele3.php"); 
    }

    if(!empty($_POST['lid']))
    {
        $sql = "DELETE FROM lekarz WHERE id='".$_POST['lid']."'";
        $conn->query($sql);
        header("location:wiele3.php");  
    }

    if(!empty($_POST['pid']))
    {
        $sql = "DELETE FROM pacjent WHERE id='".$_POST['pid']."'";
        $conn->query($sql); 
        header("location:wiele3.php");
    }
 
?>
    </div>
</div> 