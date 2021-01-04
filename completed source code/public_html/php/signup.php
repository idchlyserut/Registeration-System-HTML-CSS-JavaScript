<?php 

// initializing variables
$name = "";
$email  = "";
$errors = array(); 
$uni = "";
$period ="";
$password="";

// connect to the database
$link = mysqli_connect('localhost', 'id15613200_root', 'Akulupa1998#', 'id15613200_systemdb');


// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($link, $_POST['name']);
  $course = mysqli_real_escape_string($link, $_POST['course']);
  $uni = mysqli_real_escape_string($link, $_POST['uni']);
  $period = mysqli_real_escape_string($link, $_POST['period']);
  $email = mysqli_real_escape_string($link, $_POST['email']);
  $password = mysqli_real_escape_string($link, $_POST['password']);
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  //	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, course, uni, period, email, password) 
  			  VALUES('$name','$course', '$uni','$period', '$email', '$password')";
			  
    
        if(mysqli_query($link, $query))
        {
            	?>
				<script> 
				alert('Account created successfully!');
				window.location.href = ' ../index.php';
				</script>
				<?php
            
            }
            
            else
        {
                 	
                 	?>
				<script> 
				alert('Oh no! something went wrong, please try again.');
				window.location.href = ' ../signup.php';
				</script>
				<?php
                
            
        }
  }


  
?>