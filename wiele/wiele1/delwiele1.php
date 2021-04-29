<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("/app/assets/connect.php");

    if(!empty($_POST['mid']))
    {
        $sql = "DELETE FROM osoba_rola WHERE id='".$_POST['mid']."'";
        $conn->query($sql); 
        // header("location:wiele1.php"); 
    }

    if(!empty($_POST['oid']))
    {
        $sql = "DELETE FROM osoba WHERE id='".$_POST['oid']."'";
        $conn->query($sql);
        // header("location:wiele1.php");  
    }

    if(!empty($_POST['rid']))
    {
        $sql = "DELETE FROM rola WHERE id='".$_POST['rid']."'";
        $conn->query($sql); 
        // header("location:wiele1.php");
    }
 
?>
    </div>
</div> 