<?php 
$servername = "localhost";
$username = "id15613200_root";
$password = "Akulupa1998#";
$dbname = "id15613200_systemdb";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

//check connection

if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error ());
	}
	

	?>