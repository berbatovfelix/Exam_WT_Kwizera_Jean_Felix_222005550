<?php
//kwizera jean felix 222005550
// Database configuration
$servername = "localhost"; 
$username = "Kwizera"; 
$password = "Kwizera@123"; 
$database = "onlinelifecoachingservice"; // 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
