<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $GoalID = $_POST['GoalID'];
    $ClientID = $_POST['ClientID'];
    $Description  = $_POST['Description'];
    $TargetCompletionDate = $_POST['TargetCompletionDate'];
    $ProgressStatus = $_POST['ProgressStatus'];
    

    // Update query
    $sql = "UPDATE goals SET ClientID='$ClientID',Description ='$Description ', TargetCompletionDate='$TargetCompletionDate',  ProgressStatus='$ProgressStatus' WHERE GoalID='$GoalID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewgoals.php");
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
 