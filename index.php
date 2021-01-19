
<?php
include('server.php');
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
    
					<form class="form-signin" method="POST" id="login-form" action="index.php">
					<img class="mb-4" src="img/logojpkn.png" alt="" width="150px" height="100px">
					<h1 class="h3 mb-3 font-weight-normal">Log Masuk</h1>
						
							<label for="inputEmail" class="sr-only">E-mel</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="E-mel" required autofocus>
							<label for="inputPassword" class="sr-only">Kata Laluan</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Kata Laluan" required>
					
							
							<button type="submit" name="submit" id="signin" class="btn btn-lg btn-primary btn-block" >Log Masuk</button><br>
							
							<a href="php/forgotpass.php" class="mt-5 mb-3 text-muted">Terlupa kata laluan?</a> <br>
							<a href="signup.php" class="mt-5 mb-3 text-muted">Cipta akaun baru</a> <br>
							<a href="login_admin.php" class="mt-5 mb-3 text-muted">Admin? klink sini.</a> <br>
								
							<p class="mt-5 mb-3 text-muted">&copy; 2020 Jabatan Perkhidmatan Komputer Negeri Sabah</p>
				</form>
		<!-- JS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="js/main.js"></script>
</body>
</html>