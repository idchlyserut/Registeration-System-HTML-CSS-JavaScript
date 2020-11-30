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
$sql = "CREATE TABLE application (
id int(11) unsigned NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
email VARCHAR(30) NOT NULL, 
course VARCHAR (100) NOT NULL,
uni VARCHAR (100) NOT NULL,
period VARCHAR (30) NOT NULL,
filename VARCHAR(255), NOT NULL,
filesize INTEGER NOT NULL,
downloads 
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