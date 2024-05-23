<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $SessionID = $_POST['SessionID'];
    $CoachID = $_POST['CoachID'];
    $ClientID = $_POST['ClientID'];
    $Date = $_POST['Date'];
    $Duration = $_POST['Duration'];
    $Notes = $_POST['Notes'];
    

    // Update query
    $sql = "UPDATE sessions SET CoachID='$CoachID',ClientID='$ClientID', Date='$Date', Duration='$Duration',Notes='$Notes' WHERE SessionID='$SessionID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewsessions.php");
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
 