<?php include "/app/assets/body.html" ?>
<?php
	require_once("/app/assets/connect.php");
	$sql = "INSERT INTO pracownik(`id`, `imie`, `dzial_id`, `wynagrodzenie`, `dataUrodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial_id']."', '".$_POST['wynagrodzenie']."', '".$_POST['dataUrodzenia']."')";
	$conn->query($sql);

    header("location:wiele6.php");
?>
    </div>
</div>