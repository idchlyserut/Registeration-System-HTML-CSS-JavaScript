<?php 
session_start();

// initializing variables
$name = "";
$email  = "";
$errors = array(); 

// connect to the database
$link = mysqli_connect('localhost', 'root', '', 'systemDB');


// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($link, $_POST['name']);
  $course = mysqli_real_escape_string($link, $_POST['course']);
  $uni = mysqli_real_escape_string($link, $_POST['uni']);
  $period = mysqli_real_escape_string($link, $_POST['period']);
  $email = mysqli_real_escape_string($link, $_POST['email']);
  $password = mysqli_real_escape_string($link, $_POST['password']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($course)) { array_push($errors, "Course required"); }
  if (empty($uni)) { array_push($errors, "University is required"); }
  if (empty($period)) { array_push($errors, "Internship Period is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  
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
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, course, uni, period, email, password) 
  			  VALUES('$name','$course', '$uni','$period', '$email', '$password')";
			  
  	mysqli_query($link, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.php');
  }


  
?>