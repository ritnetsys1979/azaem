<?php
echo "Welcome To My Site"
   
	$hostname=appmysql.mysql.database.azure.com
	$username=aemadmin
	$password="Rituparna!@#2022"
	$ssl-mode=require
	$dbdb = "books";
    
$conn = new mysqli($hostname, $username, $password, $dbdb);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	else
	echo "connected";
?>