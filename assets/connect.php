<?php
$hostname = $_SERVER['HTTP_HOST'];
if ($hostname == 'localhost:8003') {
    require_once ("config.php");
}

$conn=new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password'],$_SERVER['dbname']);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
