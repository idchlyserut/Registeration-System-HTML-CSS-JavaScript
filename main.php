<?php 

include('session.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Internship Application</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
   <!-- Font Icon -->
   <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#header" class="scrollto"><img src="images/logo.png" alt=""></a> 
      

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="main.php">Submission Page</a></li>
          <li><a href="Info.php">Contact Us</a></li>
          <li><a href="php/logout.php">Log Out</a></li>
     
        </ul>
      </nav>
      
  </header>
  
  <!-- #header -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">

      
        <!-- LI Application Form-->
        <section class="sign-in">
		<div class="container">
            <h2 class="form-title">LI Application Form</h2>
			 <form method="POST" class="register-form" id="register-form" action="php/filesLogic.php" enctype="multipart/form-data">
                          <div class="form-group">
						      
							<div class="signin-form">
							
									<!---header second form-->
									<h5 class="wrapping-background"> Important Documents </h5>
										<br>
					                <!-- second Form Section--->
					                  <div class="wrapping-background">
                
								<div class="form-group"></div>
									<p for="file">Please upload these files: </p><br>
									<p><b> 1. Academic Application Letter</p><br>
									<p>2. Resume</p><br>
									<p>3. Latest Exam Transcript</p><br>
								    <p>4. Acceptance Form by Faculty</p><br></b>
									<p>Put documents in a folder and compress it into a .zip file </p> <b>
									</div>
									
										<div>
										
										
										
								      <input type="file" name="myfile" class="btn btn-danger btn-lg active" role="button" aria-pressed="true"multiple> </input>
									  </div>
									
									
									<div class="form-group form-button">
									<input type="submit" name="submit" id="submit" class="form-submit" value="submit"/>
								
								</div>
							</div>
            </div>
        </section>

    </div>

    </section>
	


  <!-- JavaScript Libraries -->
  <script src="vendor/jquery/jquery.min.js"></script>
   <script src="js/main.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  

</body>
</html>
  