<?php
require_once "db_connection.php";
//kwizera jean felix 222005550
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['NotificationID'])) {
    // Sanitize the input
    $notificationID = $conn->real_escape_string($_POST['NotificationID']);

    // Delete query
    $sql = "DELETE FROM notification WHERE NotificationID='$notificationID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: viewnotification.php");
    } else {
        echo "Error deleting record:" .$conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted via POST method or notificationID is not set, redirect or show an error message
    echo "Invalid request.";
}
?>

