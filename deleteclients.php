<?php
require_once "db_connection.php";
//kwizera jean felix 222005550
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ClientID'])) {
    // Sanitize the input
    $clientsID = $conn->real_escape_string($_POST['ClientID']);

    // Delete query
    $sql = "DELETE FROM clients WHERE ClientID='$clientsID'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: viewclients.php");
    } else {
        echo "Error deleting record:" .$conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted via POST method or clientsID is not set, redirect or show an error message
    echo "Invalid request.";
}
?>

