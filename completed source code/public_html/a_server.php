<?php
    session_start();
   include('conn.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($link,$_POST['email']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
	  
      
      $sql = "SELECT * FROM admins WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['email'] = $myemail;
         
         header("location: admin.php");
      }else {
         	?>
				<script> 
				alert('Your email/password is invalid');
				window.location.href = 'login_admin.php';
				</script>
				<?php
      }
   }
?>