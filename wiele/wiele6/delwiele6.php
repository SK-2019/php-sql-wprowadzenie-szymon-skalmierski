<?php include "/app/assets/body.html" ?>
<?php
	require_once("/app/assets/connect.php");
	$sql = "DELETE FROM pracownik WHERE id='".$_POST['id']."'";
	$conn->query($sql); 
    
    header("location:wiele6.php"); 
?>
    </div>
</div>