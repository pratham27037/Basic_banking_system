<?php
$serverName = "localhost";
$userName = "root";
$password = "root";
$dbName = "sparks_bank";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_errno()) {
	echo "failed";
	exit();
}


?>