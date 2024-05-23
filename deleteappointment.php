<?php
require_once "db_connection.php";
//kwizera jean felix 222005550
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['AppointmentID'])) {
    // Sanitize the input
    $appointmentID = $conn->real_escape_string($_POST['AppointmentID']);

    // Delete query
    $sql = "DELETE FROM appointment WHERE AppointmentID='$appointmentID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: viewappointment.php");
    } else {
        echo "Error deleting record:" .$conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted via POST method or appointmentID is not set, redirect or show an error message
    echo "Invalid request.";
}
?>

