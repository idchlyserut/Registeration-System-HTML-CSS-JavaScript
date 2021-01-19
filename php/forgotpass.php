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
                $txt = "Selamat sejahtera, ini adalah kata laluan anda: $password.";
                $headers = "From: jpkn@no-reply.com";
                mail($to,$subject,$txt,$headers);
				?>
				<script> 
				alert('Kata laluan anda telah dihantar ke E-mel anda.');
				window.location.href = ' ../index.php';
				</script>
				<?php
			}
				else{
					?>
				<script> 
				alert('E-mel tidak tepat.');
				window.location.href = ' ../index.php';
				</script>
				<?php
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	
<style type="text/css">
 input{
 border:1px solid blue;
 border-radius:5px;
 }
 h1{
  color:darkblue;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<div class="container">
<h1>Lupa kata laluan<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>E-mel anda:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input class="mt-5 mb-3 text-muted" type='submit' name='submit' value='Hantar'/></td></tr>
</table>
</form>
</div>
</body>
</html>