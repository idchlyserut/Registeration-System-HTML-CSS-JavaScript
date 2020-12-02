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
$sql = "CREATE TABLE files (
id int(11) unsigned NOT NULL AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
size int NOT NULL,
downloads binary,
PRIMARY KEY (id)
)";


if (mysqli_query ($conn, $sql)) {
	echo "Table files created successfully!";
	}
else {
	echo "Error creating table: " . mysqli_error($conn);
	}
mysqli_close ($conn);
?>