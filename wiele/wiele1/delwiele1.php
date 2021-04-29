<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo ".$_POST['mid'].";
echo ".$_POST['rid'].";
echo ".$_POST['oid'].";
    if($_POST('mid')!="")
    {
        require_once("/app/assets/connect.php");
        $sql = "DELETE FROM osoba_rola WHERE id='".$_POST['mid']."'";
        $conn->query($sql); 
        header("location:wiele1.php"); 
    }

    if($_POST('oid')!="")
    {
        require_once("/app/assets/connect.php");
        $sql = "DELETE FROM osoba WHERE id='".$_POST['oid']."'";
        $conn->query($sql);
        header("location:wiele1.php");  
    }

    if($_POST('rid')!="")
    {
        require_once("/app/assets/connect.php");
        $sql = "DELETE FROM rola WHERE id='".$_POST['rid']."'";
        $conn->query($sql); 
        header("location:wiele1.php"); 
    }
    
?>
    </div>
</div> 