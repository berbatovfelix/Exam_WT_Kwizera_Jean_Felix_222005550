<?php
/*
    
 <!-- jean felix kwizera        REG_NO:  222005550  -->
 <!-- online life coach service-->


*/
// Include database connection file
require_once "db_connection.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$email = $_POST['Email'];
$password = $_POST['Password'];

$stmt = $conn->prepare("SELECT Username FROM users WHERE Email=? AND Password=?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    // User found, redirect to user home page
    session_start();
    $_SESSION['Email'] = $email;
    header("Location: Dashboarduser.html");
    exit();
} else {
    // User not found, display error message
    echo "<script>alert('Wrong Email or Password, Please Verify Credentials');</script>";
    echo "<script>window.location.href = 'loginuser.html';</script>";
}


$stmt->close();
$conn->close();
?>
