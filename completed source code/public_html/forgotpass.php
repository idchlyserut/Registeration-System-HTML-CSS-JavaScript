<?php
session_start();
include_once 'conn.php';
if(isset($_POST['submit']))
{
    $user_email = $_POST['email'];
    $result = mysqli_query($link,"SELECT * FROM users where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	
	$email_id=$row['email'];
	$password=$row['password'];
	if($user_email==$email_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Hello! You have requested to retrieve your password for the JPKN internship account. Your password is : $password.";
                $headers = "From: jpkn@no-reply.com";
                mail($to,$subject,$txt,$headers);
				?>
				<script> 
				alert('Your password has been sent.');
				window.location.href = 'index.php';
				</script>
				<?php
			}
				else{
							?>
				<script> 
				alert('Oop! no email found');
				window.location.href = 'forgotpass.php';
				</script>
				<?php
				}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
  
    <title>Welcome to InteRS</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
					<form class="form-signin" method="POST" id="login-form" action="forgotpass.php">
					<img class="mb-4" src="img/logojpkn.png" alt="" width="150px" height="100px">
					<h1 class="h3 mb-3 font-weight-normal">Retrieve Password</h1>
						
							<label for="inputEmail" class="sr-only">Email address</label>
							<input type='text' name="email" id="email" class="form-control" placeholder="Email address" required autofocus><br>
							
							<button type="submit" name="submit" id="signin" class="btn btn-lg btn-primary btn-block" >Submit</button> <br>
							<a href="index.php" class="mt-5 mb-3 text-muted">< Back to sign in</a> <br>
						
								
							<p class="mt-5 mb-3 text-muted">&copy; 2020 Jabatan Perkhidmatan Komputer Negeri Sabah</p>
				</form>
		<!-- JS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="js/main.js"></script>
</body>
</html>