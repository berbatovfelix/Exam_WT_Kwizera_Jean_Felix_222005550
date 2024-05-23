<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $ResourceID = $_POST['ResourceID'];
    $Title = $_POST['Title'];
    $Type = $_POST['Type'];
    $Description = $_POST['Description'];
    $Link = $_POST['Link'];
    $CoachID = $_POST['CoachID'];
    

    // Update query
    $sql = "UPDATE resource SET Title='$Title',Type='$Type', Description='$Description', Link='$Link',CoachID='$CoachID' WHERE ResourceID='$ResourceID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewresource.php");
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
 