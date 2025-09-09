<?php
$servername = "localhost";  // Change if using a remote server
$username = "root";  
$password = "";  
$dbname = "carecompass";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
