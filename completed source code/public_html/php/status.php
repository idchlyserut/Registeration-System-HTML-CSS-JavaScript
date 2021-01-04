
<?php 


//create connection
$conn = mysqli_connect('localhost', 'id15613200_root', 'Akulupa1998#', 'id15613200_systemdb');

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
        $txt = "Hello! Congratulation! you have been accepted in JPKN for your internship! Do respond us at (EMAIL) for further details! TQ.";
        $headers = "From: jpkn@no-reply.com";
        mail($to,$subject,$txt,$headers);
        

			
		//pop-up message
	if(mysqli_query($conn, $sql))
        {
        
            	?>
				<script> 
				alert('Acceptance email has been sent!');
				window.location.href = ' ../admin.php';
				</script>
				<?php
            
            }
            
            else
        {
                 	
                 	?>
				<script> 
				alert('Something went wrong, please try again');
				window.location.href = ' ../admin.php';
				</script>
				<?php
                
            
        }
        
 
	}
	
		elseif(isset($_POST['decline']) )

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
        $txt = "Hello! Unfortunately we could not accept you as some information did not met our expectation. We apologise for this inconvenience, have a nice day.";
        $headers = "From: jpkn@no-reply.com";
        mail($to,$subject,$txt,$headers);
				
				
				//pop-up message
	if(mysqli_query($conn, $sql))
        {
            	?>
				<script> 
				alert('Declination email has been sent!');
				window.location.href = ' ../admin.php';
				</script>
				<?php
            
            }
            
            else
        {
                 	
                 	?>
				<script> 
				alert('Something went wrong, please try again');
				window.location.href = ' ../admin.php';
				</script>
				<?php
                
            
        }
	}
	
		elseif(isset($_POST['delete']) )
{
    	$id = mysqli_real_escape_string($conn,$_POST['id']);
		
		//insert into table 'result' in database
		$sql = "DELETE FROM files WHERE  id= $id ";
        
        if(mysqli_query($conn, $sql))
        {
            	?>
				<script> 
				alert('Application has been deleted');
				window.location.href = ' ../admin.php';
				</script>
				<?php
            
            }
            
            else
        {
                 	
                 	?>
				<script> 
				alert('Application is not in the database!');
				window.location.href = ' ../admin.php';
				</script>
				<?php
                
            
        }
        
 
			
}






