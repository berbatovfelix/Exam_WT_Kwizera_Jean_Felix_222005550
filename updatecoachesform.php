<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $CoachID = $_POST['CoachID'];
    $UserID = $_POST['UserID'];
    $Bio = $_POST['Bio'];
    $Specialization = $_POST['Specialization'];
    $Availability = $_POST['Availability'];
    

    // Update query
    $sql = "UPDATE coaches SET UserID='$UserID', Bio='$Bio', Specialization='$Specialization',  Availability='$Availability' WHERE CoachID='$CoachID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewcoaches.php");
    } else {
        echo "Error updating record: " .$conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted via POST method, redirect or show an error message
    echo "Form submission method not allowed.";
}
?>
 