<?php
    $user = "aemadmin";
    $pass = "Rituparna!@#2022";
    $host = "appmysql.mysql.database.azure.com";
    $dbdb = "books";
    
$conn = new mysqli($host, $user, $pass, $dbdb);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	else
	echo "connected";
?>