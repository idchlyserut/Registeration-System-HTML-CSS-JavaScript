
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
  
    <title>Daftar Sekarang</title>
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
        <!-- Sign up form -->
       	<form class="form-signin" method="POST" id="login-form" action="php/signup.php">
					<img class="mb-4" src="img/logojpkn.png" alt="" width="150px" height="100px">
					<h1 class="h3 mb-3 font-weight-normal">Daftar Sekarang</h1>

                      
                            <div>
                              
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama Penuh" required  autofocus />
                            </div>
							<div>
							  
                                <input type="text" name="course" id="course" class="form-control" placeholder="Kos Pengajian" required />
                            </div>
							 <div>
                             
                                <input type="text" name="uni" id="uni" class="form-control" placeholder="Tempat Pengajian" required />
                            </div>
								 <div>
                                
                                <input type="number" min="12" name="period" id="period" class="form-control" placeholder="Bilangan Minggu Praktikal" required />
                            </div>
                            <div>
                               
                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mel Anda" required />
                            </div>
                            <div>
                                
                                <input type="password" name="password" class="form-control" id="pass" placeholder="Kata Laluan" required />
                            </div>
                          
                            <div class="form-group">
                       
							<a class="mt-5 mb-3 text-muted"> Dengan mengklik Daftar, anda bersetuju dengan <a href="#" class="term-service">Terma, Dasar Data dan Dasar Kuki kami. </a>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="btn btn-lg btn-primary btn-block"  value="Daftar"/>
                            </div>
							 <a href="index.php" class="mt-5 mb-3 text-muted">Kembali ke log masuk</a>
                        </form>
                    </div>
                    <div class="signup-image">
                     
                       
                    </div>
                </div>
            </div>
        </section>
		
		
		  <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>