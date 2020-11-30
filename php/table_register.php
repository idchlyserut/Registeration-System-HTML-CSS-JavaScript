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
$sql = "CREATE TABLE users(
id int(11) unsigned NOT NULL AUTO_INCREMENT,
name VARCHAR(300) NOT NULL,
email VARCHAR(30) NOT NULL, 
course VARCHAR (100) NOT NULL,
uni VARCHAR (100) NOT NULL,
period VARCHAR (30) NOT NULL,
password VARCHAR (100) NOT NULL,
re_enter_pass VARCHAR (100) NOT NULL,
PRIMARY KEY (id),
UNIQUE KEY email (email)
)";

if (mysqli_query ($conn, $sql)) {
	echo "Table users created successfully!";
	}
else {
	echo "Error creating table: " . mysqli_error($conn);
	}
mysqli_close ($conn);
?>