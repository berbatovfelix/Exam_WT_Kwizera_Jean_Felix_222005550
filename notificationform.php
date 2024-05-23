<?php
//kwizera jean felix 222005550
// Include the database conn file
require_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $UserID = mysqli_real_escape_string($conn, $_POST['UserID']);
    $Message = mysqli_real_escape_string($conn, $_POST['Message']);
  

    // Attempt to insert the data into the database
    $sql = "INSERT INTO notification (UserID, Message) 
            VALUES ('$UserID', '$Message')";

    if (mysqli_query($conn, $sql)) {
        echo "notification record added successfully.";
   
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close conn
    mysqli_close($conn);
}
?>