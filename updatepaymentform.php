<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $PaymentID = $_POST['PaymentID'];
    $UserID = $_POST['UserID'];
    $Amount = $_POST['Amount'];
    $PaymentDate = $_POST['PaymentDate'];
    // Update query
    $sql = "UPDATE payment SET UserID='$UserID', Amount='$Amount', PaymentDate='$PaymentDate' WHERE PaymentID='$PaymentID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewpayment.php");
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
 