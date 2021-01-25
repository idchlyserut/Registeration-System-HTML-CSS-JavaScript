<?php
  session_start(); 

  if (!isset($_SESSION['email'])) {
    ?>
    <script>
      alert('Sila log masuk');
      window.location.href='index.php';
    </script>
    <?php
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.php");
  }

  include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Internship Aplikasi </title>
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
        <a href="main.php" class="scrollto"><img src="images/logo.png" alt=""></a> 
      

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="main.php">Halaman Utama</a></li>
          <li><a href="info.php">Hubungi Kami</a></li>
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
			<div class="form-title" style="padding-left:30%;">
			  <h2>LI Application Form</h2>
			  <p>Dokumen Pendaftaran Pelajar Latihan Industri</p>
			  </div>
                <div class="signin-content" >
                    <div class="signin-image" >
                       
					        		<!---Form start-->
                    <h5 class="wrapping-background">Applicant Information<i><br>(Informasi Pemohon)</i> </h5>
                    <br>	
                          <form method="POST" class="register-form" id="register-form" action="php/filesLogic.php" enctype="multipart/form-data">
                          <div class="form-group">
						  <?php
						  
						  $query = "SELECT * from users WHERE email = '{$_SESSION['email']}'";
						  $query_run = mysqli_query($link, $query);
						  
						  while ($row = mysqli_fetch_array($query_run)){
							 ?>
								<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                             <input type="text" name="name" id="name"  readonly  value="<?php echo $row['name']; ?>"/>
                              </div>

               
                                  <div class="form-group">
                                       <label for="email"><i class="zmdi zmdi-lock-outline"></i></label>
                                         <input type="text" name="email" id="email"  readonly   value="<?php echo $row['email']; ?>"/>
                                      </div>
									  
									  
									  <div class="form-group">
                                       <label for="course"><i class="zmdi zmdi-lock-outline"></i></label>
                                         <input type="text" name="course" id="course"  readonly   value="<?php echo $row['course']; ?>"/>
                                      </div>
									  
									  
                                  <div class="form-group">
                                       <label for="uni"><i class="zmdi zmdi-lock-outline"></i></label>
                                         <input type="text" name="uni" id="uni"  readonly   value="<?php echo $row['uni']; ?>"/>
                                      </div>
									  
									   <div class="form-group">
                                       <label for="period"><i class="zmdi zmdi-lock-outline"></i></label>
                                         <input type="text" name="period" id="period"  readonly   value="<?php echo $row['period']; ?>"/>
                                      </div>
								
							 <?php
						  }
						  
						  
						  ?>
						  
                      

									 
                                              	<!--end first form-->
						      
							
									<!---header second form-->
									 <h5 class="wrapping-background">Important Documents<i><br>(Dokumen-dokumen Penting)</i> </h5>
										<br>
					                <!-- second Form Section--->
					                  <div class="wrapping-background">
                
								<div class="form-group"></div>
									<p for="file">Please upload these files: </p>
									<p for="file"> <i>Sila muat naik dokumen-dokumen tersenarai di bawah: </i> </p><br>
									<p><b> 1. Academic Application Letter </b> <i>/ Surat Permohonan Akademik </i></p><br>
									<p><b>2. Resume </b><i>/ Resume </i></p><br>
									<p><b>3. Latest Exam Transcript </b><i>/ Slip Peperiksaan Terbaru </i></p><br>
								    <p><b>4. Acceptance Form by Faculty</b> <i>/ Borang Penerimaan pelajar LI daripada fakulti</i></p><br>
									<p><b>Put documents in a folder and compress it into a .zip file </b> <i>/ Sila letak dokumen-dokumen dalam fail .zip </i></p><br>
									
                                <div class="form-group form-button">
								            
								          		<input type="file" name="myfile" required>
									</div>
									</div>

									<div class="form-group form-button">
									<input type="submit" name="submit" id="submit" class="form-submit" value="Hantar"/>
								
								</div>
							</div>
                        </form>
                      </main>
						<!--end form-->	
                    </div>
					
					
                </div>
            </div>
        </section>

    </div>

    </section>
	


  <!-- JavaScript Libraries -->

   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
 
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  

</body>
</html>
  