
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
	

$sql = "INSERT INTO admins (email, password)
VALUES ('idcomel123@gmail.com', 'password123');";





if (mysqli_multi_query($conn,$sql)){
	echo "New records created successfully";
	}else {
	echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
	}
mysqli_close ($conn);