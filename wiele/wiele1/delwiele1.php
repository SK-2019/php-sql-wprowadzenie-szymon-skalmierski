<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("/app/assets/connect.php");

$mid = $_POST['mid'];
$oid = $_POST['oid'];
$rid = $_POST['rid'];


    if(isset($mid))
    {
        $sql = "DELETE FROM osoba_rola WHERE id='".$mid."'";
        $conn->query($sql); 
        header("location:wiele1.php"); 
    }

    if(isset($oid))
    {
        $sql = "DELETE FROM osoba WHERE id='".$oid."'";
        $conn->query($sql);
        header("location:wiele1.php");  
    }

    if(isset($rid))
    {
        $sql = "DELETE FROM rola WHERE id='".$rid."'";
        $conn->query($sql); 
        header("location:wiele1.php");
    }
 
?>
    </div>
</div> 