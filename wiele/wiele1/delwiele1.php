<?php include "/app/assets/body.html" ?>
<?php
require_once("/app/assets/connect.php");
    if($_POST('mid')!="")
    {
        $sql = "DELETE FROM osoba_rola WHERE id='".$_POST['mid']."'";
        $conn->query($sql); 
        header("location:wiele1.php"); 
    }
    if($_POST('oid')!="")
    {
        $sql = "DELETE FROM osoba WHERE id='".$_POST['oid']."'";
        $conn->query($sql);
        header("location:wiele1.php");  
    }
    if($_POST('rid')!="")
    {
        $sql = "DELETE FROM rola WHERE id='".$_POST['rid']."'";
        $conn->query($sql); 
        header("location:wiele1.php"); 
    }
    
?>
    </div>
</div> 