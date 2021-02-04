<?php
  session_start(); 

  if (!isset($_SESSION['email'])) {
    ?>
    <script>
      alert('Sila Log Masuk!');
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
          <li class="active"><a href="admin.php">Senarai Permohonan</a></li>
          <li><a href="result.php">Senarai Keputusan</a></li>
            <li><a href="main.php?logout='1'">Log Keluar</a></li>
     
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
			 <div class="form-title" style="padding-left:33%;">
			  <h2>Applicants List</h2>
			  <p>Senarai Permohonan dari Pelajar LI</p>
			  </div>

                    <div class="wrapping-background">
						<!---header for form-->
                        <h4> Recieved Applicantions<i><br>(Permohonan Yang Telah Diterima)</i> </h4>
                        <p>The table below are of the submitted application for the internship position at JKPNS<i> <br>/Jadual dibawah merupakan permohonan untuk posisi latihan industri di JPKNS</i> </p>
						<br>
						<!-- Form Section--->
					
                        <form method="POST" action="php/status.php" class="register-form" id="login-form">
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col" >#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col" >E-mel</th>
                                    <th scope="col">Status</th>
									<th scope="col">Tindakan</th>
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
										<input type="hidden" name="id" value="<?php echo $file['id']; ?>"/>
										<td><input type="hidden" name="name" value="<?php echo $file['name']; ?>"/><?php echo $file['name']; ?></td>
										<td><input type="hidden" name="email" value="<?php echo $file['email']; ?>"/><?php echo $file['email']; ?></td>
										<td><input type="hidden" name="uni" value="<?php echo $file['uni']; ?>"/>
										<td><input type="hidden" name="period" value="<?php echo $file['period']; ?>"/>
										<td><input type="hidden" name="course" value="<?php echo $file['course']; ?>"/>
										<td><a href="php/uploads/<?php echo $file['file'] ?>" target="_blank" class="btn btn-primary btn-sm active" role="button" aria-pressed="true" >Download</a></td>
											<td>
                                        <button type="submit" name="accept" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Terima</button>
                                         <button type="submit" name="decline" class="btn btn-warning btn-sm active" role="button" aria-pressed="true" >Tolak</button>
										     <button type="submit" name="delete" class="btn btn-danger btn-sm active" role="button" aria-pressed="true" >Padam</button>
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
