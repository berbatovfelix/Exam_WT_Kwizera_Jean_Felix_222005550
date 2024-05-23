<?php
//kwizera jean felix 222005550
// Include the database conn file
require_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $CoachID = mysqli_real_escape_string($conn, $_POST['CoachID']);
    $ClientID = mysqli_real_escape_string($conn, $_POST['ClientID']);
    $Date = mysqli_real_escape_string($conn, $_POST['Date']);
    $Status = mysqli_real_escape_string($conn, $_POST['Status']);

    // Attempt to insert the data into the database
    $sql = "INSERT INTO appointment (CoachID, ClientID, Date, Status) 
            VALUES ('$CoachID', '$ClientID', '$Date', '$Status')";

    if (mysqli_query($conn, $sql)) {
        echo "appointment record added successfully.";

        
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close conn
    mysqli_close($conn);
}
?>
