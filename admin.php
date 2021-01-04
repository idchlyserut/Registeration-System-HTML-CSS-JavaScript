<?php
  session_start(); 

  if (!isset($_SESSION['email'])) {
    ?>
    <script>
      alert('Please login!');
      window.location.href='login_admin.php';
    </script>
    <?php
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login_admin.php");
  }

  include('conn.php');

?>

<?php include "php/filesLogic.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Applicants</title>
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
          <li class="active"><a href="admin.php">Applicants List</a></li>
          <li><a href="result.php">Result List</a></li>
            <li><a href="main.php?logout='1'">Log Out</a></li>
     
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
			  <h2 class="form-title">Applicants List</h2>

                    <div class="wrapping-background">
						<!---header for form-->
                        <h3> Submitted Form</h3>
                        <p>This is a table of submitted application for the internship position at JKPNS</p>
						<br>
						<!-- Form Section--->
						
                        <form method="POST" action="php/status.php" class="register-form" id="login-form">
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col" style="width:20px">Num</th>
                                    <th scope="col" style="width:150px" >Name</th>
                                    <th scope="col" style="width:50px">Email</th>
                                    <th scope="col">Documents</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
								
                                  <tr>
                                      <?php foreach ($files as $file): ?>
										<td><?php 
									
										 static $number = 0;
												$number++;
										echo $number  ?>
										
										</td>
										<td><input type="hidden" name="name" value="<?php echo $file['name']; ?>"/><?php echo $file['name']; ?></td>
										<td><input type="hidden" name="email" value="<?php echo $file['email']; ?>"/><?php echo $file['email']; ?></td>
										<td><input type="hidden" name="id" value="<?php echo $file['id']; ?>"/><?php echo $file['id']; ?></td>
										<td><a href="php/uploads/<?php echo $file['file'] ?>" target="_blank" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" >Download</a></td>
										<td>
                                        <button type="submit" name="accept">Accept</button>
                                         <button type="submit" name="decline">Decline</button>
										     <button type="submit" name="delete">X</button>
										</td>
										</tr>
										
										<?php endforeach;?>
                                 
                                </tbody>
                              </table>
                              
                        </form>
                      
                    </div>
						<!--end form-->
						<div class="signin-content" ></div>
                    </div>
					
                </main>
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
