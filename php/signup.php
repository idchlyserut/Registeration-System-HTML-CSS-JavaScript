<?php 
session_start();

// initializing variables
$name = "";
$email  = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'systemDB');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $course = mysqli_real_escape_string($conn, $_POST['course']);
  $uni = mysqli_real_escape_string($conn, $_POST['uni']);
  $period = mysqli_real_escape_string($conn, $_POST['period']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $re_enter= mysqli_real_escape_string($conn, $_POST['re_pass']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($course)) { array_push($errors, "Course required"); }
  if (empty($uni)) { array_push($errors, "University is required"); }
  if (empty($period)) { array_push($errors, "Internship Period is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if ($password != $re_enter) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, course, uni, period, email, password, re_enter_pass) 
  			  VALUES('$name','$course', '$uni','$period', '$email', '$password', '$re_enter')";
			  
  	mysqli_query($conn, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ../index.html');
  }
}

  
?>