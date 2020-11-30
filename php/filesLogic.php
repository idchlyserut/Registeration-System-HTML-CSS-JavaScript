<?php
// connect to the database
  include("connection.php");
   session_start();

$sql = "SELECT * FROM application";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// define variables and set to empty values
$nameErr = $emailErr = $courseErr = $uniErr = $periodErr = "";
$name = $email = $course = $uni = $period = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["course"])) {
    $courseErr = "Course is required";
  } else {
    $course = test_input($_POST["course"]);
  }
  
	if (empty($_POST["uni"])) {
    $courseErr = "University name is required";
  } else {
    $course = test_input($_POST["uni"]);
  }
  
  if (empty($_POST["period"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["period"]);
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





// Uploads files
if (isset($_POST['submit'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['filename'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['filesize'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['filesize'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO application (filename, filesize, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }

}
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM application WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['filename'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['filename']));
        readfile('uploads/' . $file['filename']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE application SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>