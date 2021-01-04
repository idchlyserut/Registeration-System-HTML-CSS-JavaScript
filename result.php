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
<?php include ('php/show_result.php') ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Result</title>
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
          <li ><a href="admin.php">Applicants List</a></li>
          <li class="active"><a href="result.php">Result List</a></li>
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
                        <h3> Result List</h3>
                        <p>Result complete lists of approved and declined applications.</p>
						<br>
						<!-- Form Section--->
						
                        <form method="POST"  id="content" action="result.php" class="register-form" id="login-form">
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Applicant Info</th>
                                    <th scope="col">Status</th>
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
										
                                    <td><?php echo $file['name']; ?></td>
                                    <td><?php echo $file['email']; ?> </td>
                                    <td><?php echo $file['status']; ?></td>
                                  </tr>
								  <?php endforeach;?>
                                 </tbody>
                              </table>
                        </form>
                      
                    </div>
                    <br><br>
					<div id="editor"></div>
                    <a onclick="window.print()" class="btn btn-danger btn-lg active" id="cmd" role="button" aria-pressed="true">Print List</a>

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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
