<?php include "/app/assets/body.html" ?>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("/app/assets/connect.php");

    if(!empty($_POST['mid']))
    {
        $sql = "DELETE FROM nauczyciel_klasa WHERE id='".$_POST['mid']."'";
        $conn->query($sql); 
        header("location:wiele4.php"); 
    }

    if(!empty($_POST['nid']))
    {
        $sql = "DELETE FROM nauczyciel WHERE id='".$_POST['nid']."'";
        $conn->query($sql);
        header("location:wiele4.php");  
    }

    if(!empty($_POST['kid']))
    {
        $sql = "DELETE FROM klasa WHERE id='".$_POST['kid']."'";
        $conn->query($sql); 
        header("location:wiele4.php");
    }
 
?>
    </div>
</div> 