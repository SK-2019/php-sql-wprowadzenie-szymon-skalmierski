<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("/app/assets/connect.php");
print_r($_POST['mid']);
print_r($_POST['praid']);
print_r($_POST['proid']);
    if(!empty($_POST['mid']))
    {
        $sql = "DELETE FROM pracownik_projekt WHERE id='".$_POST['mid']."'";
        $conn->query($sql); 
        header("location:wiele5.php"); 
    }

    if(!empty($_POST['pid']))
    {
        $sql = "DELETE FROM pracownik WHERE id='".$_POST['pid']."'";
        $conn->query($sql);
        header("location:wiele5.php");  
    }

    if(!empty($_POST['proid']))
    {
        $sql = "DELETE FROM projekt WHERE id='".$_POST['proid']."'";
        $conn->query($sql); 
        header("location:wiele5.php");
    }
 
?>
    </div>
</div> 