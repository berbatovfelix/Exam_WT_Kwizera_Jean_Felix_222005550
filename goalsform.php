<?php
//kwizera jean felix 222005550
// Include the database conn file
require_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $ClientID = mysqli_real_escape_string($conn, $_POST['ClientID']);
    $Description = mysqli_real_escape_string($conn, $_POST['Description']);
    $TargetCompletionDate = mysqli_real_escape_string($conn, $_POST['TargetCompletionDate']);
    $ProgressStatus = mysqli_real_escape_string($conn, $_POST['a']);

    // Attempt to insert the data into the database
    $sql = "INSERT INTO goals (ClientID, Description, TargetCompletionDate, ProgressStatus) 
            VALUES ('$ClientID', '$Description', '$TargetCompletionDate', '$ProgressStatus')";

    if (mysqli_query($conn, $sql)) {
        echo "goals record added successfully.";

        
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close conn
    mysqli_close($conn);
}
?>
