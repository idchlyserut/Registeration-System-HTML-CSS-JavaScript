
<?php 
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "SystemDB";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $dbname);

//check connection

	
	if(isset($_POST['accept']) )

	{
		$status_1="accepted"; //status that will be inserted 
		$myemail = mysqli_real_escape_string($conn,$_POST['email']); 
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		
		/*
		//insert into table 'result' in database
		$sql = "INSERT INTO result (name, email, status)
			VALUES ('$name', '$myemail', '$status_1');";
			
		//email for students
		$to = $myemail;
        $subject = "JPKN Internship Application Status";
        $txt = "Hello! <br> Congratulation! you have been accepted in JPKN for your internship! Do respond us at (EMAIL) for further details! TQ.";
        $headers = "From: jpkn@no-reply.com";
        mail($to,$subject,$txt,$headers);
			
		//pop-up message
			?>
			<script>
			alert(' Acceptance Email sent to student!');
			window.location.href='../admin.php';
			</script>
			<?php
			*/
	}

	
		else if(isset($_POST['decline']) )

	{
		$status_2="declined"; //status that will be inserted 
		$myemail = mysqli_real_escape_string($conn,$_POST['email']); 
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		
		//insert into table 'result' in database
		//$sql = "INSERT INTO result (name, email, status)
		//	VALUES ('$name', '$myemail', '$status_2');";
			
			/*
		//email for students
		$to = $myemail;
        $subject = "JPKN Internship Application Status";
        $txt = "Hello! <br> Unfortunately we could not accept you as some information did not met our expectation. We apologise for this inconvenience, have a nice day.";
        $headers = "From: jpkn@no-reply.com";
        mail($to,$subject,$txt,$headers);
				
				
				
			?>
			<script>
			alert('Declination Email sent to student!');
			window.location.href='../admin.php';
			</script>
			<?php
*/

	}
	
	else if(isset($_POST['delete']) )
	
	{
		
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		
		//insert into table 'result' in database
		$sql = "DELETE FROM files WHERE  id= $id ";
	}
		
			
	else if(isset($_POST['delete_result']) )
	
	{
		
		$id = mysqli_real_escape_string($conn,$_POST['id']);
		
		//insert into table 'result' in database
		$sql = "DELETE FROM result WHERE  id= $id ";
		
				?>
			<script>
			alert('Result column deleted');
			window.location.href='result.php';
			</script>
			<?php
	}
	

if (mysqli_query($conn, $sql)) {
	
	echo "Changes are done successfully!";

} else 

{
	
  echo "Error change of record: " . mysqli_error($conn);
}

?>