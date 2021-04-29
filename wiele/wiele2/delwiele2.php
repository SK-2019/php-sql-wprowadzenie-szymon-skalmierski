<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("/app/assets/connect.php");

    if(!empty($_POST['mid']))
    {
        $sql = "DELETE FROM autor_tytul WHERE id='".$_POST['mid']."'";
        $conn->query($sql); 
        header("location:wiele2.php"); 
    }

    if(!empty($_POST['tid']))
    {
        $sql = "DELETE FROM tytul WHERE id='".$_POST['tid']."'";
        $conn->query($sql);
        header("location:wiele2.php");  
    }

    if(!empty($_POST['aid']))
    {
        $sql = "DELETE FROM autor WHERE id='".$_POST['aid']."'";
        $conn->query($sql); 
        header("location:wiele2.php");
    }
 
?>
    </div>
</div> 