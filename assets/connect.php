<?php
$hostname = $_SERVER['HTTP_HOST'];
        
if ($hostname == 'localhost:8003') {
    require_once ("../config.php");
}

$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
