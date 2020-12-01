<?php 
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "SystemDB";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

//check connection
if (!$conn){
	die ("Connection failed: " . mysqli_connect_error());
	}
	
//sql to create table
$sql = "CREATE TABLE admins (
id int(11) unsigned NOT NULL AUTO_INCREMENT,
email VARCHAR(255) NOT NULL, 
password VARCHAR (30) NOT NULL,
PRIMARY KEY (id),
UNIQUE KEY email (email))";

if (mysqli_query ($conn, $sql)) {
	echo "Table admins created successfully!";
	}
else {
	echo "Error creating table: " . mysqli_error($conn);
	}
mysqli_close ($conn);
?>