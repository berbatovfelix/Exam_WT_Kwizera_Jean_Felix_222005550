<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $ClientID = $_POST['ClientID'];
    $UserID = $_POST['UserID'];
    $Goals = $_POST['Goals'];
    $Progress = $_POST['Progress'];
    

    // Update query
    $sql = "UPDATE clients SET UserID='$UserID', Goals='$Goals',  Progress='$Progress' WHERE ClientID='$clientsID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewclients.php");
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
 