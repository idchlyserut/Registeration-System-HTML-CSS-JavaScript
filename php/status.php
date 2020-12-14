
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
	}
	else{
		
		
		
	}
	
		if(isset($_POST['decline']) )

	{
		$status_2="declined"; //status that will be inserted 
		$myemail = mysqli_real_escape_string($conn,$_POST['email']); 
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		
		//insert into table 'result' in database
		$sql = "INSERT INTO result (name, email, status)
			VALUES ('$name', '$myemail', '$status_2');";
			
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
	}
	else{
		
		?>
			<script>
			alert('Unsucessfully due to duplicated email!');
			window.location.href='../admin.php';
			</script>
			<?php
		
	}





if (mysqli_multi_query($conn,$sql)){
	echo "Tarik bossssssss! suda masuk duitmu!";
	}else {
	echo "Error: " . $sql . "<br>" . mysqli_error ($conn);
	}
mysqli_close ($conn);