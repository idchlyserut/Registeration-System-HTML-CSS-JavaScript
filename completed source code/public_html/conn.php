<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "id15613200_root";
$password = "Akulupa1998#";
$db = "id15613200_systemdb";
 
/* Attempt to connect to MySQL database */
$link = new mysqli($servername, $username, $password, $db);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>