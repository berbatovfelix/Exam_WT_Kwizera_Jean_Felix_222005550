<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $FeedbackID = $_POST['FeedbackID'];
    $SessionID  = $_POST['SessionID '];
    $ClientID = $_POST['ClientID'];
    $Rating = $_POST['Rating'];
    $Comments = $_POST['Comments'];
    $Date = $_POST['Date'];
    

    // Update query
    $sql = "UPDATE feedback SET SessionID ='$SessionID ', ClientID='$ClientID', Rating='$Rating',  Comments='$Comments',Date='$Date' WHERE FeedbackID='$FeedbackID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewfeedback.php");
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
 