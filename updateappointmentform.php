<?php
//kwizera jean felix 222005550
// Database connection parameters
// Include database connection file
require_once "db_connection.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs (you can add more validation if needed)
    $AppointmentID = $_POST['AppointmentID'];
    $CoachID = $_POST['CoachID'];
    $ClientID = $_POST['ClientID'];
    $Date = $_POST['Date'];
    $Status = $_POST['Status'];
    

    // Update query
    $sql = "UPDATE appointment SET CoachID='$CoachID', ClientID='$ClientID', Date='$Date',  Status='$Status' WHERE AppointmentID='$AppointmentID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
         header("Location: viewappointment.php");
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
 