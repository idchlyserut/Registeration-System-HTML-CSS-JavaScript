<?php
session_start();
include_once 'connection.php';
if(isset($_POST['delete']))
{
    $user_email = $_POST['email'];
    $result = mysqli_query($conn,"DELETE FROM result where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);

				?>
				<script> 
				alert('Application has been deleted');
				window.location.href = ' ../admin.php';
				</script>
				<?php
}
?>
