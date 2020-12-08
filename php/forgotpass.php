<?php
session_start();
include_once 'connection.php';
if(isset($_POST['submit']))
{
    $user_email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM users where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	
	$email_id=$row['email'];
	$password=$row['password'];
	if($user_email==$email_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Hello! You have requested to retrieve your password for the JPKN internship account </br> Your password is : $password.";
                $headers = "From: jpkn@no-reply.com";
                mail($to,$subject,$txt,$headers);
				?>
				<script> 
				alert('Your password has been sent.');
				window.location.href = ' ../index.php';
				</script>
				<?php
			}
				else{
					echo 'invalid email';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user email:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>