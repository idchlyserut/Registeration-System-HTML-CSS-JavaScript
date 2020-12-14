
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
	
$status_1="declined";

$sql = "INSERT INTO result (name, email, status)
VALUES ('yo','yo@gmail.com', '$status_1');";





if (mysqli_multi_query($conn,$sql)){
	echo "suda masuk";
	}else {
	echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
	}
mysqli_close ($conn);